<?php
/* @var $this ProjectController */
/* @var $model Project */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'project-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sort'); ?>
		<?php echo $form->textField($model,'sort'); ?>
		<?php echo $form->error($model,'sort'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category'); ?>
		<?php echo $form->dropDownList($model,'category',CHtml::listData(SubjectCategory::model()->findAll(),'name','name'),array('empty'=>'请选择')); ?>
		<?php echo $form->error($model,'category'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'owner'); ?>
		<?php echo $form->textField($model,'owner',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'owner'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'members'); ?>
		<?php echo $form->textField($model,'members',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'members'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'begin_date'); ?>
		<?php echo $form->textField($model,'begin_date',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'begin_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'end_date'); ?>
		<?php echo $form->textField($model,'end_date',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'end_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_funding'); ?>
		<?php echo $form->textField($model,'total_funding'); ?>
		<?php echo $form->error($model,'total_funding'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'first_funding'); ?>
		<?php echo $form->textField($model,'first_funding'); ?>
		<?php echo $form->error($model,'first_funding'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'second_funding'); ?>
		<?php echo $form->textField($model,'second_funding'); ?>
		<?php echo $form->error($model,'second_funding'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'third_funding'); ?>
		<?php echo $form->textField($model,'third_funding'); ?>
		<?php echo $form->error($model,'third_funding'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'forth_funding'); ?>
		<?php echo $form->textField($model,'forth_funding'); ?>
		<?php echo $form->error($model,'forth_funding'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fif_funding'); ?>
		<?php echo $form->textField($model,'fif_funding'); ?>
		<?php echo $form->error($model,'fif_funding'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'equipment_funding'); ?>
		<?php echo $form->textField($model,'equipment_funding'); ?>
		<?php echo $form->error($model,'equipment_funding'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'research_direction'); ?>
		<?php echo $form->textField($model,'research_direction',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'research_direction'); ?>
	</div>
	<?php /*?>
	<div class="row">
		<?php echo $form->labelEx($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
		<?php echo $form->error($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_by'); ?>
		<?php echo $form->textField($model,'updated_by',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'updated_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
		<?php echo $form->error($model,'updated_at'); ?>
	</div>
	<?php */?>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '创建' : '保存'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->