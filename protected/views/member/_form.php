<?php
/* @var $this MemberController */
/* @var $model Member */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'member-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">带<span class="required">*</span>为必填项。</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sort'); ?>
		<?php echo $form->textField($model,'sort'); ?>
		<?php echo $form->error($model,'sort'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'research_direction'); ?>
		<?php echo $form->dropDownList($model,'research_direction',CHtml::listData(ResearchDirection::model()->findAll(),'name','name'),array('empty'=>'请选择')); ?>
		<?php echo $form->error($model,'research_direction'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'research_unit'); ?>
		<?php echo $form->dropDownList($model,'research_unit',CHtml::listData(ResearchUnit::model()->findAll(),'name','name'),array('empty'=>'请选择')); ?>
		<?php echo $form->error($model,'research_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'english_name'); ?>
		<?php echo $form->textField($model,'english_name',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'english_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_of_birth'); ?>
		<?php echo $form->textField($model,'date_of_birth',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'date_of_birth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->textField($model,'gender',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qualification'); ?>
		<?php echo $form->textField($model,'qualification',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'qualification'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'degree'); ?>
		<?php echo $form->textField($model,'degree',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'degree'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->dropDownList($model,'title',Member::model()->getTitleOptions(),array('empty'=>'请选择')); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'honorary_title'); ?>
		<?php echo $form->textField($model,'honorary_title',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'honorary_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'area_of_expertise'); ?>
		<?php echo $form->textField($model,'area_of_expertise',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'area_of_expertise'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phd_mentor'); ?>
		<?php echo $form->textField($model,'phd_mentor',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'phd_mentor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'master_mentor'); ?>
		<?php echo $form->textField($model,'master_mentor',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'master_mentor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'enter_date'); ?>
		<?php echo $form->textField($model,'enter_date',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'enter_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'out_date'); ?>
		<?php echo $form->textField($model,'out_date',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'out_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '创建' : '保存'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->