<?php
/* @var $this ConferenceController */
/* @var $model Conference */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'conference-form',
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
		<?php echo $form->labelEx($model,'organizer'); ?>
		<?php echo $form->textField($model,'organizer',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'organizer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'undertaker'); ?>
		<?php echo $form->textField($model,'undertaker',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'undertaker'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conference_time'); ?>
		<?php echo $form->textField($model,'conference_time',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'conference_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'member'); ?>
		<?php echo $form->textField($model,'member',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'member'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category'); ?>
		<?php echo $form->dropDownList($model, 'category', $model->getCategories()); ?>
		<?php echo $form->error($model,'category'); ?>
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