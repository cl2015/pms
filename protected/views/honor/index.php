<?php
/* @var $this HonorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'奖励',
);

$this->menu=array(
	array('label'=>'创建', 'url'=>array('create')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>奖励</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>