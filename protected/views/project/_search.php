<?php
/* @var $this ProjectController */
/* @var $model Project */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sort'); ?>
		<?php echo $form->textField($model,'sort'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'category'); ?>
		<?php echo $form->textField($model,'category',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'owner'); ?>
		<?php echo $form->textField($model,'owner',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'members'); ?>
		<?php echo $form->textField($model,'members',array('size'=>60,'maxlength'=>512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'begin_date'); ?>
		<?php echo $form->textField($model,'begin_date',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'end_date'); ?>
		<?php echo $form->textField($model,'end_date',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_funding'); ?>
		<?php echo $form->textField($model,'total_funding'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'first_funding'); ?>
		<?php echo $form->textField($model,'first_funding'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'second_funding'); ?>
		<?php echo $form->textField($model,'second_funding'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'third_funding'); ?>
		<?php echo $form->textField($model,'third_funding'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'forth_funding'); ?>
		<?php echo $form->textField($model,'forth_funding'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fif_funding'); ?>
		<?php echo $form->textField($model,'fif_funding'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'funding_2014'); ?>
		<?php echo $form->textField($model,'funding_2014'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'funding_2015'); ?>
		<?php echo $form->textField($model,'funding_2015'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'funding_2016'); ?>
		<?php echo $form->textField($model,'funding_2016'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'research_direction'); ?>
		<?php echo $form->textField($model,'research_direction',array('size'=>60,'maxlength'=>256)); ?>
	</div>
	<?php /*
	<div class="row">
		<?php echo $form->label($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updated_by'); ?>
		<?php echo $form->textField($model,'updated_by',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
	</div>
	
	*/?>
	<div class="row buttons">
		<?php echo CHtml::submitButton('搜索'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->