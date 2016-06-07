<?php

namespace Victoire\Widget\DataVisualizationBundle\Form\Transformer;

use Symfony\Component\Form\DataTransformerInterface;

/**
 * Class DataToDataOptionTransformer.
 * This transformer is used to transform data to an array that can be use to generate a data option type.
 */
class DataToDataOptionTransformer implements DataTransformerInterface
{
    private $default;
    private $canBeMultiple;
    private $length;

    /**
     * DataToDataOptionTransformer constructor.
     *
     * @param bool $hasDefault
     */
    public function __construct($hasDefault = true, $canBeMultiple = true, $length = null)
    {
        $this->default = $hasDefault;
        $this->length = $length;
        $this->canBeMultiple = $canBeMultiple;
    }

    /**
     * @param mixed $value
     *
     * @return array
     */
    public function transform($value)
    {
        $value = json_decode($value);
        if (is_array($value)) {
            $dataOptionMultiple = $value;
            if ($this->length && $this->length < count($value)) {
                $dataOptionMultiple = array_slice($dataOptionMultiple, 0, $this->length);
            }
            $dataOptionSingle = isset($value[0]) ? $value[0] : null;
            $isDefault = false;
        } else {
            $dataOptionMultiple = $this->length ? array_fill(0, $this->length, $value) : [$value];
            $dataOptionSingle = $value;
            $isDefault = true;
        }
        if ($this->default) {
            return [
                'data_option_multiple' => $dataOptionMultiple,
                'data_option_single' => $dataOptionSingle,
                'isDefault' => $isDefault,
            ];
        } elseif($this->canBeMultiple) {
            return [
                'data_option_multiple' => $dataOptionMultiple,
            ];
        }else{
            return [
                'data_option_single' => $dataOptionSingle,
            ];
        }
    }

    /**
     * @param mixed $value
     */
    public function reverseTransform($value)
    {
        if ((isset($value['isDefault']) && $value['isDefault']) || (array_key_exists('data_option_single', $value) && !array_key_exists('data_option_multiple',$value))) {
            $val = $value['data_option_single'];
            if ($val == null) {
                return;
            }
        } elseif (isset($value)) {
            $val = $value['data_option_multiple'];
            foreach ($val as $index => $item) {
                if ($item == null) {
                    return;
                }
            }
        }

        return $val;
    }
}
