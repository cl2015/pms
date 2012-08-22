<?php
/* @var $this LaboratoryController */
/* @var $model Laboratory */

$this->breadcrumbs=array(
	'实验室'=>array('index'),
	'管理',
);

$this->menu=array(
	array('label'=>'列表', 'url'=>array('index')),
	array('label'=>'创建', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('laboratory-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理实验室</h1>

<?php echo CHtml::link('高级搜索','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'laboratory-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'director',
		'dependent',
		'phone',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
