<?php
/* @var $this PaperController */
/* @var $model Paper */

$this->breadcrumbs=array(
	'论著'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'列表', 'url'=>array('index')),
	array('label'=>'创建', 'url'=>array('create')),
	array('label'=>'更新', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>查看论著 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'author',
		'post_time',
		'periodical_info',
		'paper_category',
		'research_direction',
		/*
		'created_by',
		'created_at',
		'updated_by',
		'updated_at',
		*/
	),
)); ?>
