Chart.pluginService.register({
    beforeRender: function (chart) {
        if (chart.config.options.tooltips.displayOnBorders) {
            // create an array of tooltips
            // we can't use the chart tooltip because there is only one tooltip per chart
            chart.pluginTooltips = [];
            chart.config.data.datasets.forEach(function (dataset, i) {
                chart.getDatasetMeta(i).data.forEach(function (sector, j) {

                    chart.options.tooltips.callbacks.beforeLabel = function(tooltipItem, data){
                        return data.labels[tooltipItem.index];
                    };
                    chart.options.tooltips.callbacks.label = function(tooltipItem, data){
                        return ;
                    };
                    chart.options.tooltips.callbacks.beforeLabel = function(tooltipItem, data){
                        return data.labels[tooltipItem.index];
                    };
                    chart.options.tooltips.callbacks.afterLabel = function(tooltipItem, data){
                        return data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                    };
                    chart.pluginTooltips.push(new Chart.Tooltip({
                        _chart: chart.chart,
                        _chartInstance: chart,
                        _data: chart.data,
                        _options: chart.options,
                        _active: [sector]
                    }, chart));
                });
            });

            // turn off normal tooltips
            chart.options.tooltips.enabled = false;
        }
    },
    afterDraw: function (chart, easing) {
        if (chart.config.options.tooltips.displayOnBorders) {
            // we don't want the permanent tooltips to animate, so don't do anything till the animation runs atleast once
            if (!chart.allTooltipsOnce) {
                if (easing !== 1)
                    return;
                chart.allTooltipsOnce = true;
            }

            // turn on tooltips
            chart.options.tooltips.enabled = true;
            chart.options.tooltips.bodyAlign = "center";

            Chart.helpers.each(chart.pluginTooltips, function (tooltip) {
                tooltip.initialize();
                tooltip.update();
                tooltip._model.backgroundColor = "rgba(0,0,0,0)";
                var tooltipSize = tooltip.getTooltipSize(tooltip._model);
                var fromY = tooltip._model.y + tooltipSize.height/2+1;
                var toY = tooltip._model.y + tooltipSize.height/2+1;
                var fromX = 0;
                var toX =  tooltip._model.x ;
                if(tooltip._model.xAlign == "right"){
                    tooltip._model.xAlign ="left";
                    toX = tooltip._model.x + tooltipSize.width;
                    tooltip._model.x = tooltip._chart.width - tooltipSize.width;
                    fromX = tooltip._chart.width;
                }else{
                    tooltip._model.xAlign ="right";
                    tooltip._model.x = tooltipSize.width/2;
                }
                // we don't actually need this since we are not animating tooltips
                tooltip.pivot();

                var ctx = tooltip._chart.canvas.getContext('2d');
                if(tooltip._model.xAlign == "right"){
                    tooltip._model.x =  + tooltipSize.width/2;
                }else{
                    tooltip._model.x = tooltip._chart.width - tooltipSize.width;

                }
                var radius = 10;

                ctx.beginPath();
                ctx.lineWidth = 1;
                ctx.moveTo(fromX, fromY);
                ctx.lineTo(toX,toY);
                ctx.arc(toX, toY, 2, 0, 2 * Math.PI, false);
                ctx.fillStyle = chart.options.tooltips.backgroundColor;
                ctx.fill();
                ctx.strokeStyle = chart.options.tooltips.backgroundColor;
                ctx.stroke();
                tooltip.transition(easing).draw();
            });
            chart.options.tooltips.enabled = false;
        }
    }
})
