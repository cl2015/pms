<?php
/* @var $this LectureController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'讲座',
);

$this->menu=array(
	array('label'=>'创建', 'url'=>array('create')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>讲座</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
