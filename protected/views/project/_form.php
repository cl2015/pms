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

	<p class="note">带<span class="required">*</span>为必填项。</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sort'); ?>
		<?php echo $form->textField($model,'sort'); ?>
		<?php echo $form->error($model,'sort'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category'); ?>
		<?php echo $form->dropDownList($model,'category',CHtml::listData(SubjectCategory::model()->findAll(array('order'=>'sort')),'name','name'),array('empty'=>'请选择')); ?>
		<?php echo $form->error($model,'category'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'research_direction'); ?>
		<?php echo $form->dropDownList($model,'research_direction',CHtml::listData(ResearchDirection::model()->findAll(array('order'=>'sort')),'name','name'),array('empty'=>'请选择')); ?>
		<?php echo $form->error($model,'research_direction'); ?>
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
		<?php echo $form->labelEx($model,'funding_2009'); ?>
		<?php echo $form->textField($model,'funding_2009'); ?>
		<?php echo $form->error($model,'funding_2009'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'funding_2010'); ?>
		<?php echo $form->textField($model,'funding_2010'); ?>
		<?php echo $form->error($model,'funding_2010'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'funding_2011'); ?>
		<?php echo $form->textField($model,'funding_2011'); ?>
		<?php echo $form->error($model,'funding_2011'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'funding_2012'); ?>
		<?php echo $form->textField($model,'funding_2012'); ?>
		<?php echo $form->error($model,'funding_2012'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'funding_2013'); ?>
		<?php echo $form->textField($model,'funding_2013'); ?>
		<?php echo $form->error($model,'funding_2013'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'funding_2014'); ?>
		<?php echo $form->textField($model,'funding_2014'); ?>
		<?php echo $form->error($model,'funding_2014'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'funding_2015'); ?>
		<?php echo $form->textField($model,'funding_2015'); ?>
		<?php echo $form->error($model,'funding_2015'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'funding_2016'); ?>
		<?php echo $form->textField($model,'funding_2016'); ?>
		<?php echo $form->error($model,'funding_2016'); ?>
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