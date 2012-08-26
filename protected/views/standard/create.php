<?php
/* @var $this StandardController */
/* @var $model Standard */

$this->breadcrumbs=array(
	'标准'=>array('index'),
	'创建',
);

$this->menu=array(
	array('label'=>'列表', 'url'=>array('index')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>创建标准</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>