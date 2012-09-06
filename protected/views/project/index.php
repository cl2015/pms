<?php
/* @var $this ProjectController */
/* @var Project::model()Provider CActiveDataProvider */

$this->breadcrumbs=array(
	'课题',
);

$this->menu=array(
	array('label'=>'创建', 'url'=>array('create')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>课题</h1>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'project-form',
	'enableAjaxValidation'=>false,
)); ?>
	<div class="row">
		<?php echo CHtml::encode($model->getAttributeLabel('category')); ?>
		<?php echo $form->dropDownList($model,'category',CHtml::listData(SubjectCategory::model()->findAll(),'name','name'),array('empty'=>'请选择','onChange'=>'jump(this.value)')); ?>
	</div>
<?php $this->endWidget(); ?>
</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'project-grid',
	'dataProvider'=>$dataProvider,
	'enableSorting'=>false,
	'columns'=>array(
		array(
			'type'=>'raw',
			'value'=>'CHtml::link(CHtml::encode($data->id), array("view", "id"=>$data->id));',
			'name'=>'id',
		),
		'sort',
		'name',
		'category',
// 		'research_direction',
		'owner',
// 		'members',
		'total_funding',
		'begin_date',
		'end_date',
// 		'funding_2014',
// 		'funding_2015',
// 		'funding_2016',
	),
)); ?>


<script>
function jump(id){
	if(id!=null && id != ''){
		location.href="./index?category="+id;
	}else{
		location.href="./index";
	}
}
</script>
