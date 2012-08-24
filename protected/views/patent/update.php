<?php
/* @var $this PatentController */
/* @var $model Patent */

$this->breadcrumbs=array(
	'专利'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'更新',
);

$this->menu=array(
	array('label'=>'列表', 'url'=>array('index')),
	array('label'=>'创建', 'url'=>array('create')),
	array('label'=>'查看', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>更新专利 <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>