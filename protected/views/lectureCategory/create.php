<?php
/* @var $this LectureCategoryController */
/* @var $model LectureCategory */

$this->breadcrumbs=array(
	'Lecture Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LectureCategory', 'url'=>array('index')),
	array('label'=>'Manage LectureCategory', 'url'=>array('admin')),
);
?>

<h1>Create LectureCategory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>