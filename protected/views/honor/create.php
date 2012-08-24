<?php
/* @var $this HonorController */
/* @var $model Honor */

$this->breadcrumbs=array(
	'奖励'=>array('index'),
	'创建',
);

$this->menu=array(
	array('label'=>'列表', 'url'=>array('index')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>创建奖励</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>