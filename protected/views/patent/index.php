<?php
/* @var $this PatentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'专利',
);

$this->menu=array(
	array('label'=>'创建', 'url'=>array('create')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>专利</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'patent-grid',
	'dataProvider'=>$dataProvider,
	'enableSorting'=>false,
	'columns'=>array(
		array(
			'type'=>'raw',
			'value'=>'CHtml::link(CHtml::encode($data->id), array("view", "id"=>$data->id));',
			'name'=>'id',
		),
		'title',
		'inventor',
		'accept_time',
		'authorized_time',
		'is_sale',
		'detail',
	),
)); ?>
