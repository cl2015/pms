<?php
/* @var $this CommitteeController */
/* @var $model Committee */

$this->breadcrumbs=array(
	'Committees'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Committee', 'url'=>array('index')),
	array('label'=>'Create Committee', 'url'=>array('create')),
	array('label'=>'Update Committee', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Committee', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Committee', 'url'=>array('admin')),
);
?>

<h1>View Committee #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'gender',
		'date_of_bitrh',
		'educational_background',
		'title',
		'position',
		'specialty',
		'organization',
		'contact',
		'created_by',
		'created_at',
		'updated_by',
		'updated_at',
	),
)); ?>
