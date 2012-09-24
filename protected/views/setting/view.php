<?php
/* @var $this SettingController */
/* @var $model Setting */

$this->breadcrumbs=array(
	'系统设置'
);

$this->menu=array(
	array('label'=>'更新', 'url'=>array('update', 'id'=>$model->id)),
);
?>

<h1>查看系统设置</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'copyright',
		'pagesize',
		'name',
		'image',
// 		'created_by',
// 		'created_at',
// 		'updated_by',
// 		'updated_at',
	),
)); ?>
