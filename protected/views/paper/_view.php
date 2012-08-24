<?php
/* @var $this PaperController */
/* @var $model Paper */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('author')); ?>:</b>
	<?php echo CHtml::encode($data->author); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_time')); ?>:</b>
	<?php echo CHtml::encode($data->post_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('periodical_info')); ?>:</b>
	<?php echo CHtml::encode($data->periodical_info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paper_category')); ?>:</b>
	<?php echo CHtml::encode($data->paper_category); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('research_direction')); ?>:</b>
	<?php echo CHtml::encode($data->research_direction); ?>
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