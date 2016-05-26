$vic(document).ready(function () {
    $vic(document).on('data-visualization-action', 'form', function(event) {
        var form = $vic(this);
        loading(true);

        var targetClass = ".vic-modal-body .vic-container-fluid .vic-tab-pane.vic-active";
        if ($vic(this).data('target')) {
            targetClass = $vic(this).data('target');
        } else if ($vic(this).parents('.vic-modal').hasClass('-stylize')) {
            targetClass = ".vic-modal-body .vic-container-fluid";
        }

        //Get last element of visible target class
        var $target = $vic(document).find(targetClass + ':visible');
        $target = $target.last();

        $vic.ajax({
            type: form.attr('method'),
            url : form.attr('action') + '?novalidate',
            data: form.serialize(),
            async: true
        }).done(function(response){
            $target.html(response.html);
            var scripts = $target.find("script");
            loading(false);
        }).fail(function(response) {
            console.log(response);
            error('Oups, une erreur est apparue', 10000);
        });
    });
});
var enableDataOptions = function(defaultElm, multipleElm, singleElm)
{
    if(defaultElm.is(":checked"))
    {
        multipleElm.hide();
        singleElm.show();
    }else{
        multipleElm.show();
        singleElm.hide();

    }
    defaultElm.on('change', function (){
        if($vic(this).is(":checked"))
        {
            multipleElm.hide();
            singleElm.show();
        }else {
            multipleElm.show();
            singleElm.hide();
        }
    });
}
