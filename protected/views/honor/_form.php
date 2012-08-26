<?php
/* @var $this HonorController */
/* @var $model Honor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'honor-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">带<span class="required">*</span>为必填项。</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'level'); ?>
		<?php echo $form->textField($model,'level',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'level'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'winner'); ?>
		<?php echo $form->textField($model,'winner',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'winner'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bonus_time'); ?>
		<?php echo $form->textField($model,'bonus_time',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'bonus_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'certificate_location'); ?>
		<?php echo $form->textField($model,'certificate_location',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'certificate_location'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'detail'); ?>
		<?php echo $form->textField($model,'detail',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'detail'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '创建' : '保存'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->