<?php
/* @var $this LectureController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'讲座',
);

$this->menu=array(
	array('label'=>'创建', 'url'=>array('create')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'lecture-grid',
	'dataProvider'=>$dataProvider,
	'enableSorting'=>false,
	'columns'=>array(
		array(
			'type'=>'raw',
			'value'=>'CHtml::link(CHtml::encode($data->id), array("view", "id"=>$data->id));',
			'name'=>'id',
		),
		'name',
		'holding_time',
		'speaker',
		'organization',
		'category',
		'effect',
	),
)); ?>

