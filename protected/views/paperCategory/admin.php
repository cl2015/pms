<?php
/* @var $this PaperCategoryController */
/* @var $model PaperCategory */

$this->breadcrumbs=array(
	'论著类别'=>array('index'),
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
	$.fn.yiiGridView.update('paper-category-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理论著类别</h1>

<?php echo CHtml::link('高级搜索','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'paper-category-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'sort',
		'name',
		'score',
		'remark',
		/*
		'created_by',
		'created_at',
		'updated_by',
		'updated_at',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
