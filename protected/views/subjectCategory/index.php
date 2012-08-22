<?php
/* @var $this SubjectCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'课题类别',
);

$this->menu=array(
	array('label'=>'创建', 'url'=>array('create')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>课题类别</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
