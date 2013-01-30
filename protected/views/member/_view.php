<?php
/* @var $this MemberController */
/* @var $model Member */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sort')); ?>:</b>
	<?php echo CHtml::encode($data->sort); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('research_direction')); ?>:</b>
	<?php echo CHtml::encode($data->research_direction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('research_unit')); ?>:</b>
	<?php echo CHtml::encode($data->research_unit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('english_name')); ?>:</b>
	<?php echo CHtml::encode($data->english_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_of_birth')); ?>:</b>
	<?php echo CHtml::encode($data->date_of_birth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qualification')); ?>:</b>
	<?php echo CHtml::encode($data->qualification); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('degree')); ?>:</b>
	<?php echo CHtml::encode($data->degree); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('honorary_title')); ?>:</b>
	<?php echo CHtml::encode($data->honorary_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area_of_expertise')); ?>:</b>
	<?php echo CHtml::encode($data->area_of_expertise); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phd_mentor')); ?>:</b>
	<?php echo CHtml::encode($data->phd_mentor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('master_mentor')); ?>:</b>
	<?php echo CHtml::encode($data->master_mentor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enter_date')); ?>:</b>
	<?php echo CHtml::encode($data->enter_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('out_date')); ?>:</b>
	<?php echo CHtml::encode($data->out_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_by')); ?>:</b>
	<?php echo CHtml::encode($data->updated_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	*/ ?>

</div>