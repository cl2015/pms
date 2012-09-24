<?php
/* @var $this SettingController */
/* @var $model Setting */

$this->breadcrumbs=array(
	'系统设置',
	'更新',
);

$this->menu=array(
	array('label'=>'查看', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>更新系统设置</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>