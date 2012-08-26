<?php
/* @var $this EquipmentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'设备',
);

$this->menu=array(
	array('label'=>'创建', 'url'=>array('create')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>设备</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
