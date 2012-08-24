<?php
/* @var $this PaperController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'论著',
);

$this->menu=array(
	array('label'=>'创建', 'url'=>array('create')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>论著</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
