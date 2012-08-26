<?php
/* @var $this EquipmentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'设备',
);

$this->menu=array(
	array('label'=>'创建', 'url'=>array('create')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>设备</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'equipment-grid',
	'dataProvider'=>$dataProvider,
	'enableSorting'=>false,
	'columns'=>array(
		array(
			'type'=>'raw',
			'value'=>'CHtml::link(CHtml::encode($data->id), array("view", "id"=>$data->id));',
			'name'=>'id',
		),
		'name',
		'price',
		'enable_time',
		'current_status',
		'performance',
		'level',
		'effect',
		'borrow',
	),
)); ?>