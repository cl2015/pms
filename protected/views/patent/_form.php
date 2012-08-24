<?php
/* @var $this PatentController */
/* @var $model Patent */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'patent-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">带<span class="required">*</span>为必填项。</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inventor'); ?>
		<?php echo $form->textField($model,'inventor',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'inventor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'accept_time'); ?>
		<?php echo $form->textField($model,'accept_time',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'accept_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'authorized_time'); ?>
		<?php echo $form->textField($model,'authorized_time',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'authorized_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_sale'); ?>
		<?php echo $form->textField($model,'is_sale',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'is_sale'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '创建' : '保存'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->