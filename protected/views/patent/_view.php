<?php
/* @var $this PatentController */
/* @var $model Patent */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inventor')); ?>:</b>
	<?php echo CHtml::encode($data->inventor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('accept_time')); ?>:</b>
	<?php echo CHtml::encode($data->accept_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('authorized_time')); ?>:</b>
	<?php echo CHtml::encode($data->authorized_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_sale')); ?>:</b>
	<?php echo CHtml::encode($data->is_sale); ?>
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