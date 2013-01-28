<?php
/* @var $this MemberController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'人员',
);

$this->menu=array(
	array('label'=>'创建', 'url'=>array('create')),
	array('label'=>'管理', 'url'=>array('admin')),
	array('label'=>'导出', 'url'=>array('export')),
);
?>

<h1>人员</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'member-grid',
	'dataProvider'=>$dataProvider,
	'enableSorting'=>false,
	'columns'=>array(
		array(
			'type'=>'raw',
			'value'=>'CHtml::link(CHtml::encode($data->id), array("view", "id"=>$data->id));',
			'name'=>'id',
		),
		'sort',
		'research_direction',
		'research_unit',
		'name',
		'english_name',
		'date_of_birth',
		'gender',
		'qualification',
		'degree',
		'title',
		'area_of_expertise',
		'phd_mentor',
		'master_mentor',
		'enter_date',
		'out_date',
	),
)); ?>
