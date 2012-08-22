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
<table class='view' style="width:1160px;">
  <tr>
    <th><?php echo CHtml::encode(Project::model()->getAttributeLabel('id')); ?></th>
    <th><?php echo CHtml::encode(Project::model()->getAttributeLabel('sort')); ?></th>
    <th><?php echo CHtml::encode(Project::model()->getAttributeLabel('category')); ?></th>
    <th><?php echo CHtml::encode(Project::model()->getAttributeLabel('name')); ?></th>
    <th><?php echo CHtml::encode(Project::model()->getAttributeLabel('owner')); ?></th>
    <th><?php echo CHtml::encode(Project::model()->getAttributeLabel('members')); ?></th>
    <th><?php echo CHtml::encode(Project::model()->getAttributeLabel('begin_date')); ?></th>
    <th><?php echo CHtml::encode(Project::model()->getAttributeLabel('end_date')); ?></th>
    <th><?php echo CHtml::encode(Project::model()->getAttributeLabel('total_funding')); ?></th>
    <th><?php echo CHtml::encode(Project::model()->getAttributeLabel('first_funding')); ?></th>
    <th><?php echo CHtml::encode(Project::model()->getAttributeLabel('second_funding')); ?></th>
    <th><?php echo CHtml::encode(Project::model()->getAttributeLabel('third_funding')); ?></th>
    <th><?php echo CHtml::encode(Project::model()->getAttributeLabel('forth_funding')); ?></th>
    <th><?php echo CHtml::encode(Project::model()->getAttributeLabel('fif_funding')); ?></th>
    <th><?php echo CHtml::encode(Project::model()->getAttributeLabel('equipment_funding')); ?></th>
    <th><?php echo CHtml::encode(Project::model()->getAttributeLabel('research_direction')); ?></th>
  </tr>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_tableview',
)); ?>
</table>

<script>
function jump(id){
	if(id!=null && id != ''){
		location.href="./index?category="+id;
	}else{
		location.href="./index";
	}
}
</script>
