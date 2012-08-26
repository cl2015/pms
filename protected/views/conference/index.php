<?php
/* @var $this ConferenceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'学术会议',
);

$this->menu=array(
	array('label'=>'创建', 'url'=>array('create')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>学术会议</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
