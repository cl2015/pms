<?php
/* @var $this ResearchDirectionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'研究方向',
);

$this->menu=array(
	array('label'=>'创建', 'url'=>array('create')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>研究方向</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
