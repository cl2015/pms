<?php
/* @var $this StandardController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'标准',
);

$this->menu=array(
	array('label'=>'创建', 'url'=>array('create')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>标准</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'standard-grid',
	'dataProvider'=>$dataProvider,
	'enableSorting'=>false,
	'columns'=>array(
		array(
			'type'=>'raw',
			'value'=>'CHtml::link(CHtml::encode($data->id), array("view", "id"=>$data->id));',
			'name'=>'id',
		),
		'name',
		'code',
		'completed_by',
		'publish_time',
		'category',
	),
)); ?>