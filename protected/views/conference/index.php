<?php
/* @var $this ConferenceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'学术会议',
);

$this->menu=array(
	array('label'=>'创建', 'url'=>array('create')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>学术会议</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'conference-grid',
	'dataProvider'=>$dataProvider,
	'enableSorting'=>false,
	'columns'=>array(
		array(
			'type'=>'raw',
			'value'=>'CHtml::link(CHtml::encode($data->id), array("view", "id"=>$data->id));',
			'name'=>'id',
		),
		'name',
		'organizer',
		'undertaker',
		'conference_time',
		'address',
		'member',
		'category',
		'detail',
	),
)); ?>