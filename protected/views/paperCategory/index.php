<?php
/* @var $this PaperCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'论著类别',
);

$this->menu=array(
	array('label'=>'创建', 'url'=>array('create')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>论著类别</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'paper-category-grid',
	'dataProvider'=>$dataProvider,
	'enableSorting'=>false,
	'columns'=>array(
		array(
			'type'=>'raw',
			'value'=>'CHtml::link(CHtml::encode($data->id), array("view", "id"=>$data->id));',
			'name'=>'id',
		),
		'sort',
		'name',
		'score',
		'remark',
	),
)); ?>
