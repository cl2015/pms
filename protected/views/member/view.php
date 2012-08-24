<?php
/* @var $this MemberController */
/* @var $model Member */

$this->breadcrumbs=array(
	'人员'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'列表', 'url'=>array('index')),
	array('label'=>'创建', 'url'=>array('create')),
	array('label'=>'更新', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>查看人员 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
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
		/*
		'created_by',
		'created_at',
		'updated_by',
		'updated_at',
		*/
	),
)); ?>
