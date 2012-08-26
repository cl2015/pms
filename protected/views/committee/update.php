<?php
/* @var $this CommitteeController */
/* @var $model Committee */

$this->breadcrumbs=array(
	'Committees'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Committee', 'url'=>array('index')),
	array('label'=>'Create Committee', 'url'=>array('create')),
	array('label'=>'View Committee', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Committee', 'url'=>array('admin')),
);
?>

<h1>Update Committee <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>