<?php
/* @var $this SettingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Settings',
);

$this->menu=array(
	array('label'=>'Create Setting', 'url'=>array('create')),
	array('label'=>'Manage Setting', 'url'=>array('admin')),
);
?>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
