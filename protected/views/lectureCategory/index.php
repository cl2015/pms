<?php
/* @var $this LectureCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lecture Categories',
);

$this->menu=array(
	array('label'=>'Create LectureCategory', 'url'=>array('create')),
	array('label'=>'Manage LectureCategory', 'url'=>array('admin')),
);
?>

<h1>Lecture Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
