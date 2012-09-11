<?php
/* @var $this LaboratoryController */
/* @var $model Laboratory */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'laboratory-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">带<span class="required">*</span>为必填项。</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'area'); ?>
		<?php echo $form->textField($model,'area',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'area'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'project_time'); ?>
		<?php echo $form->textField($model,'project_time',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'project_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'acceptance_time'); ?>
		<?php echo $form->textField($model,'acceptance_time',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'acceptance_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_assessment_time'); ?>
		<?php echo $form->textField($model,'last_assessment_time',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'last_assessment_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lab_director'); ?>
		<?php echo $form->textField($model,'lab_director',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'lab_director'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->textField($model,'gender',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_of_birth'); ?>
		<?php echo $form->textField($model,'date_of_birth',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'date_of_birth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'degree'); ?>
		<?php echo $form->textField($model,'degree',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'degree'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_academy_of_sciences'); ?>
		<?php echo $form->textField($model,'is_academy_of_sciences',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'is_academy_of_sciences'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'duty'); ?>
		<?php echo $form->textField($model,'duty',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'duty'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'experty'); ?>
		<?php echo $form->textField($model,'experty',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'experty'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'commitee_director'); ?>
		<?php echo $form->textField($model,'commitee_director',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'commitee_director'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender2'); ?>
		<?php echo $form->textField($model,'gender2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'gender2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_of_birth2'); ?>
		<?php echo $form->textField($model,'date_of_birth2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'date_of_birth2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'degree2'); ?>
		<?php echo $form->textField($model,'degree2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'degree2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title2'); ?>
		<?php echo $form->textField($model,'title2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_academy_of_sciences2'); ?>
		<?php echo $form->textField($model,'is_academy_of_sciences2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'is_academy_of_sciences2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'duty2'); ?>
		<?php echo $form->textField($model,'duty2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'duty2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'experty2'); ?>
		<?php echo $form->textField($model,'experty2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'experty2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dependent'); ?>
		<?php echo $form->textField($model,'dependent',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'dependent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'heigher_authorty'); ?>
		<?php echo $form->textField($model,'heigher_authorty',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'heigher_authorty'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nature'); ?>
		<?php echo $form->textField($model,'nature',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nature'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zip_code'); ?>
		<?php echo $form->textField($model,'zip_code',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'zip_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'office_phone'); ?>
		<?php echo $form->textField($model,'office_phone',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'office_phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'office_fax'); ?>
		<?php echo $form->textField($model,'office_fax',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'office_fax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'first_evaluation_time'); ?>
		<?php echo $form->textField($model,'first_evaluation_time',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'first_evaluation_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'second_evaluation_time'); ?>
		<?php echo $form->textField($model,'second_evaluation_time',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'second_evaluation_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'third_evaluation_time'); ?>
		<?php echo $form->textField($model,'third_evaluation_time',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'third_evaluation_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'forth_evaluation_time'); ?>
		<?php echo $form->textField($model,'forth_evaluation_time',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'forth_evaluation_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fifth_evaluation_time'); ?>
		<?php echo $form->textField($model,'fifth_evaluation_time',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'fifth_evaluation_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'copyright'); ?>
		<?php echo $form->textField($model,'copyright',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'copyright'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '创建' : '保存'); ?>
	</div>
	

<?php $this->endWidget(); ?>

</div><!-- form -->