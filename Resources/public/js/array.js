$vic(document).ready(function(){
    $vic(document).on('click', '.form_array_add_item', function(e){
        var collectionHolder = $vic(this).parent('li').parent('.form_array_collection');
        var index = collectionHolder.children('li.form_array_item').length;
        var newItem = collectionHolder.data('prototype').replace(/__name__/g, index);
        $vic(newItem).insertBefore($vic(this).parent('li'));
        $vic(this).parents('form').trigger("data-visualization-action");
    });
    $vic(document).on('click', '.form_array_remove_item', function(e){
        var itemParent = $vic(this).parent().parent().parent('li.form_array_item').parent();

        $vic(this).parent().parent().parent('li.form_array_item').remove();
        $vic(itemParent).parents('form').trigger("data-visualization-action");
    });
});