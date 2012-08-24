<?php
/* @var $this MemberController */
/* @var $model Member */

$this->breadcrumbs=array(
	'人员'=>array('index'),
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
	$.fn.yiiGridView.update('member-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理人员</h1>

<?php echo CHtml::link('高级搜索','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'member-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'sort',
		'research_direction',
		'research_unit',
		'name',
		'english_name',
		'date_of_birth',
		'gender',
		'qualification',
		'degree',
		'title',
		'area_of_expertise',
		'phd_mentor',
		'master_mentor',
		'enter_date',
		'out_date',
		/*
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
