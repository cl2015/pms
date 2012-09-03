<?php
/* @var $this LaboratoryController */
/* @var $model Laboratory */

$this->breadcrumbs=array(
	'实验室'=>array('index'),
	$model->name,
);

$this->menu=array(
	//array('label'=>'列表', 'url'=>array('index')),
	//array('label'=>'创建', 'url'=>array('create')),
	array('label'=>'更新', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'删除', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'确认删除?')),
	//array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>查看实验室 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'director',
		'dependent',
		'phone',
	),
)); ?>
