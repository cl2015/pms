<?php
/* @var $this LaboratoryController */
/* @var $model Laboratory */

$this->breadcrumbs=array(
	'实验室'=>array('index'),
	'管理',
);

$this->menu=array(
	array('label'=>'列表', 'url'=>array('index')),
	array('label'=>'创建', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('laboratory-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理实验室</h1>

<?php echo CHtml::link('高级搜索','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'laboratory-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'copyright',
		'area',
		'project_time',
		'acceptance_time',
		/*
		'last_assessment_time',
		'lab_director',
		'gender',
		'date_of_birth',
		'degree',
		'title',
		'is_academy_of_sciences',
		'duty',
		'experty',
		'commitee_director',
		'gender2',
		'date_of_birth2',
		'degree2',
		'title2',
		'is_academy_of_sciences2',
		'duty2',
		'experty2',
		'dependent',
		'heigher_authorty',
		'nature',
		'phone',
		'address',
		'zip_code',
		'office_phone',
		'office_fax',
		'first_evaluation_time',
		'second_evaluation_time',
		'third_evaluation_time',
		'forth_evaluation_time',
		'fifth_evaluation_time',
		'created_by',
		'created_at',
		'updated_by',
		'updated_at',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
