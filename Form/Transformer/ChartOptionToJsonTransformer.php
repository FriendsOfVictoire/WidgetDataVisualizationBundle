<?php

namespace Victoire\Widget\DataVisualizationBundle\Form\Transformer;

use Symfony\Component\Form\DataTransformerInterface;
use Victoire\Widget\DataVisualizationBundle\Entity\ChartOptions\ChartOption;

/**
 * Class ChartOptionToJsonTransformer
 * This transformer encode to json ChartOption properties.
 */
class ChartOptionToJsonTransformer implements DataTransformerInterface
{
    /**
     * @param mixed $value
     *
     * @return mixed
     */
    public function transform($value)
    {
        return $value;
    }

    /**
     * @param mixed $value
     *
     * @return ChartOption
     */
    public function reverseTransform($value)
    {
        $ref = new \ReflectionClass($value);
        $className = $ref->getName();
        $properties = $ref->getProperties();

        foreach ($properties as $property) {
            if ($property->getDeclaringClass()->getName() == $className) {
                $field = $property->getName();
                $setter = 'set'.ucfirst($field);
                $getter = 'get'.ucfirst($field);
                if (method_exists($value, $getter)) {
                    $val = $value->$getter();
                    if ($val != null) {
                        if (!is_bool($val)) {
                            $val = json_encode($val);
                        } else {
                            $val = json_encode((bool) $val);
                        }
                        $value->$setter($val);
                    }
                }
            }
        }

        return $value;
    }
}
