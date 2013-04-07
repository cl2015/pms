<?php
/* @var $this CommitteeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'学术委员会',
);

$this->menu=array(
	array('label'=>'创建', 'url'=>array('create')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'committee-grid',
	'dataProvider'=>$dataProvider,
	'enableSorting'=>true,
	'columns'=>array(
		array(
			'type'=>'raw',
			'value'=>'CHtml::link(CHtml::encode($data->id), array("view", "id"=>$data->id));',
			'name'=>'id',
		),
		'name',
		'sort',
		'gender',
		'date_of_bitrh',
		'educational_background',
		'title',
		'position',
		'specialty',
		'organization',
		'contact',
		/*
		'created_by',
		'created_at',
		'updated_by',
		'updated_at',
		*/
	),
)); ?>
