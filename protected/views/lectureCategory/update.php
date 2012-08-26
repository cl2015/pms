<?php
/* @var $this LectureCategoryController */
/* @var $model LectureCategory */

$this->breadcrumbs=array(
	'Lecture Categories'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LectureCategory', 'url'=>array('index')),
	array('label'=>'Create LectureCategory', 'url'=>array('create')),
	array('label'=>'View LectureCategory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LectureCategory', 'url'=>array('admin')),
);
?>

<h1>Update LectureCategory <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>