<?php
/* @var $this EquipmentController */
/* @var $model Equipment */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enable_time')); ?>:</b>
	<?php echo CHtml::encode($data->enable_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('current_status')); ?>:</b>
	<?php echo CHtml::encode($data->current_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('performance')); ?>:</b>
	<?php echo CHtml::encode($data->performance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('level')); ?>:</b>
	<?php echo CHtml::encode($data->level); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('effect')); ?>:</b>
	<?php echo CHtml::encode($data->effect); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('borrow')); ?>:</b>
	<?php echo CHtml::encode($data->borrow); ?>
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