<?php
/* @var $this ConferenceController */
/* @var $model Conference */

$this->breadcrumbs=array(
	'学术会议'=>array('index'),
	'创建',
);

$this->menu=array(
	array('label'=>'列表', 'url'=>array('index')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>创建学术会议</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>