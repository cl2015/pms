<?php
/* @var $this MemberController */

$this->breadcrumbs=array(
		'人员'=>array('index'),
		'统计',
);

$this->menu=array(
	array('label'=>'创建', 'url'=>array('create')),
	array('label'=>'管理', 'url'=>array('admin')),
	array('label'=>'导出', 'url'=>array('export'),'linkOptions'=>array('onclick'=>'var years = prompt("years",2012);if(years==null){return false;}else{this.href+="?years="+years}','id'=>'abc')),
	array('label'=>'设置', 'url'=>array('setting')),	
);
?>
<div id="container_age" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
<div id="container_title" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
<div id="container_research" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
<script src="<?php echo Yii::app()->baseUrl;?>/js/jquery.min.js"></script>
<script type="text/javascript">
$(function () {
    var chart_age;
    var chart_title;
    var chart_research;
    
    $(document).ready(function () {
    	
    	// Build the age chart
        chart_age = new Highcharts.Chart({
            chart: {
                renderTo: 'container_age',
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            exporting: false,
            title: {
                text: '年龄统计'
            },
            tooltip: {
        	    pointFormat: '{series.name}: <b>{point.y}人,{point.percentage}%</b>',
            	percentageDecimals: 1
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                type: 'pie',
                name: '人数',
                data: [
                    <?php foreach($ages as $key=>$value){
                    echo "['" . $key . "',   " . $value ." ],\n";
                    	
					}?>
                ]
            }]
        });

     // Build the title chart
        chart_title = new Highcharts.Chart({
            chart: {
                renderTo: 'container_title',
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            exporting: false,
            title: {
                text: '职称统计'
            },
            tooltip: {
        	    pointFormat: '{series.name}: <b>{point.y}人,{point.percentage}%</b>',
            	percentageDecimals: 1
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                type: 'pie',
                name: '人数',
                data: [
                    <?php foreach($titles as $key=>$value){
                    echo "['" . $value->title . "',   " . $value->id ." ],\n";
                    	
					}?>
                ]
            }]
        });

        // Build the researchDirections chart
        chart_research = new Highcharts.Chart({
            chart: {
                renderTo: 'container_research',
                type: 'column'
            },
            title: {
                text: '所属方向统计'
            },
            xAxis: {
                categories: [
                             <?php foreach($researchDirections as $key=>$value){
                                 echo "'" . $value->research_direction . "',\n";
             				 }?>
                ],
            	title: {
                	text: '所属方向',
            	}
            },
            yAxis: {
                min: 0,
                allowDecimals: false,
                title: {
                    text: '人数'
                }
            },
            exporting: false,
            legend: {
                layout: 'vertical',
                backgroundColor: '#FFFFFF',
                align: 'left',
                verticalAlign: 'top',
                x: 100,
                y: 70,
                floating: true,
                shadow: true
            },
            tooltip: {
                formatter: function() {
                    return ''+
                        this.x +': '+ this.y +' 人';
                }
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
                series: [{
                name: '所属方向',
                data: [
                       <?php foreach($researchDirections as $key=>$value){
                           echo $value->id . ",";
                           	
       					}?>
                ]
    
            }]
        });
    });
    
});
		</script>
<script src="<?php echo Yii::app()->baseUrl;?>/js/highcharts.js"></script>
<script src="<?php echo Yii::app()->baseUrl;?>/js/modules/exporting.js"></script>