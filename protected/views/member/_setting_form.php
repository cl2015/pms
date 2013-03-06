<?php
/* @var $this SettingController */
/* @var $model Setting */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'setting-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">带<span class="required">*</span>为必填项。</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row" >
		<div class="span-22">
		<?php echo $form->labelEx($model,'member_column'); ?>
		<?php echo $form->checkBoxList($model, 'member_column',Member::model()->column,array('template'=>'<div class="span-6"> <span style="float:left;margin-right:10px;">{input}</span><span style="float:left">{label}</span></div>','separator'=>'')) ; ?>
		<?php echo $form->error($model,'member_column'); ?>
		</div>
	</div>

	<div class="row" style="clear:both">
		<?php echo $form->labelEx($model,'age1'); ?>
		<?php echo $form->textField($model,'age1',array('size'=>60,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'age1'); ?>
	</div>
	
	<div class="row" style="clear:both">
		<?php echo $form->labelEx($model,'age2'); ?>
		<?php echo $form->textField($model,'age2',array('size'=>60,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'age2'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->