<?php
/* @var $this EquipmentController */
/* @var $model Equipment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'equipment-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">带<span class="required">*</span>为必填项。</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'enable_time'); ?>
		<?php echo $form->textField($model,'enable_time',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'enable_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'current_status'); ?>
		<?php echo $form->textField($model,'current_status',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'current_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'performance'); ?>
		<?php echo $form->textField($model,'performance',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'performance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'level'); ?>
		<?php echo $form->textField($model,'level',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'level'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'effect'); ?>
		<?php echo $form->textField($model,'effect',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'effect'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'borrow'); ?>
		<?php echo $form->textField($model,'borrow',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'borrow'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '创建' : '保存'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->