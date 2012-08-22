<?php
/* @var $this PaperCategoryController */
/* @var $model PaperCategory */

$this->breadcrumbs=array(
	'论著类别'=>array('index'),
	'创建',
);

$this->menu=array(
	array('label'=>'列表', 'url'=>array('index')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>创建论著类别</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>