<?php
/* @var $this SubjectCategoryController */
/* @var $model SubjectCategory */

$this->breadcrumbs=array(
	'课题类别'=>array('index'),
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

<h1>View SubjectCategory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'sort',
		'name',
		'unit_in_charge',
		'score',
		'remark',
			/*
		'created_by',
		'created_at',
		'updated_by',
		'updated_at',
		*/
	),
)); ?>
