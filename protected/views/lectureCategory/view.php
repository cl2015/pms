<?php
/* @var $this LectureCategoryController */
/* @var $model LectureCategory */

$this->breadcrumbs=array(
	'Lecture Categories'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List LectureCategory', 'url'=>array('index')),
	array('label'=>'Create LectureCategory', 'url'=>array('create')),
	array('label'=>'Update LectureCategory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LectureCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LectureCategory', 'url'=>array('admin')),
);
?>

<h1>View LectureCategory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'sort',
		'name',
		'score',
		'created_by',
		'created_at',
		'updated_by',
		'updated_at',
	),
)); ?>
