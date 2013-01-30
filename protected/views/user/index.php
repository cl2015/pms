<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'用户',
);

$this->menu=array(
	array('label'=>'创建', 'url'=>array('create')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$dataProvider,
	'enableSorting'=>false,
	'columns'=>array(
		array(
			'type'=>'raw',
			'value'=>'CHtml::link(CHtml::encode($data->id), array("view", "id"=>$data->id));',
			'name'=>'id',
		),
		'name',
		'role',
	),
)); ?>
