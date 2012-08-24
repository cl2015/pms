<?php
/* @var $this MemberController */
/* @var $model Member */

$this->breadcrumbs=array(
	'人员'=>array('index'),
	'创建',
);

$this->menu=array(
	array('label'=>'列表', 'url'=>array('index')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>创建人员</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>