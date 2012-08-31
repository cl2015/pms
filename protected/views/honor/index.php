<?php
/* @var $this HonorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'奖励',
);

$this->menu=array(
	array('label'=>'创建', 'url'=>array('create')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>奖励</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'honor-grid',
	'dataProvider'=>$dataProvider,
	'enableSorting'=>false,
	'columns'=>array(
		array(
			'type'=>'raw',
			'value'=>'CHtml::link(CHtml::encode($data->id), array("view", "id"=>$data->id));',
			'name'=>'id',
		),
		'name',
		'species',
		'category',
		'level',
		'winner',
		'bonus_time',
		'certificate_location',
		'detail',
	),
)); ?>
