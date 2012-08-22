<?php
/* @var $this LaboratoryController */
/* @var $model Laboratory */

$this->breadcrumbs=array(
	'实验室'=>array('index'),
	'创建',
);

$this->menu=array(
	array('label'=>'列表', 'url'=>array('index')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>创建实验室</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>