<?php
/* @var $this LectureCategoryController */
/* @var $model LectureCategory */

$this->breadcrumbs=array(
	'讲座类别'=>array('index'),
	'创建',
);

$this->menu=array(
	array('label'=>'列表', 'url'=>array('index')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>创建讲座类别</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>