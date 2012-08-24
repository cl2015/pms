<?php
/* @var $this LectureController */
/* @var $model Lecture */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lecture-form',
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
		<?php echo $form->labelEx($model,'holding_time'); ?>
		<?php echo $form->textField($model,'holding_time',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'holding_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'speaker'); ?>
		<?php echo $form->textField($model,'speaker',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'speaker'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'organization'); ?>
		<?php echo $form->textField($model,'organization',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'organization'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category'); ?>
		<?php echo $form->textField($model,'category',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'category'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'effect'); ?>
		<?php echo $form->textField($model,'effect',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'effect'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '创建' : '保存'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->