<?php
/* @var $this PaperController */
/* @var $model Paper */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'paper-form',
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
		<?php echo $form->labelEx($model,'author'); ?>
		<?php echo $form->textField($model,'author',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'author'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_time'); ?>
		<?php echo $form->textField($model,'post_time',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'post_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'periodical_info'); ?>
		<?php echo $form->textField($model,'periodical_info',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'periodical_info'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paper_category'); ?>
		<?php echo $form->dropDownList($model,'paper_category',CHtml::listData(PaperCategory::model()->findAll(),'name','name'),array('empty'=>'请选择')); ?>
		<?php echo $form->error($model,'paper_category'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'research_direction'); ?>
		<?php echo $form->dropDownList($model,'research_direction',CHtml::listData(ResearchDirection::model()->findAll(),'name','name'),array('empty'=>'请选择')); ?>
		<?php echo $form->error($model,'research_direction'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '创建' : '保存'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->