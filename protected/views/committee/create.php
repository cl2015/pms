<?php
/* @var $this CommitteeController */
/* @var $model Committee */

$this->breadcrumbs=array(
	'学术委员会'=>array('index'),
	'创建',
);

$this->menu=array(
	array('label'=>'列表', 'url'=>array('index')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>创建学术委员会</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>