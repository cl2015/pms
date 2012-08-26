<?php
/* @var $this StandardController */
/* @var $model Standard */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'standard-form',
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
		<?php echo $form->labelEx($model,'code'); ?>
		<?php echo $form->textField($model,'code',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'completed_by'); ?>
		<?php echo $form->textField($model,'completed_by',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'completed_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'publish_time'); ?>
		<?php echo $form->textField($model,'publish_time',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'publish_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category'); ?>
		<?php echo $form->dropDownList($model, 'category', $model->getCategories(),array('empty'=>'请选择')); ?>
		<?php echo $form->error($model,'category'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->