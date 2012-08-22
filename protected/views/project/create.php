<?php
/* @var $this ProjectController */
/* @var $model Project */

$this->breadcrumbs=array(
	'课题'=>array('index'),
	'创建',
);

$this->menu=array(
	array('label'=>'列表', 'url'=>array('index')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>创建课题</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>