<?php
/* @var $this SubjectCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'课题类别',
);

$this->menu=array(
	array('label'=>'创建', 'url'=>array('create')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>课题类别</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'subject-category-grid',
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
		'unit_in_charge',
		'score',
		'remark',
	),
)); ?>
