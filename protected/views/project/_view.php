<?php
/* @var $this ProjectController */
/* @var $model Project */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sort')); ?>:</b>
	<?php echo CHtml::encode($data->sort); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category')); ?>:</b>
	<?php echo CHtml::encode($data->category); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('owner')); ?>:</b>
	<?php echo CHtml::encode($data->owner); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('members')); ?>:</b>
	<?php echo CHtml::encode($data->members); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('begin_date')); ?>:</b>
	<?php echo CHtml::encode($data->begin_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_date')); ?>:</b>
	<?php echo CHtml::encode($data->end_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_funding')); ?>:</b>
	<?php echo CHtml::encode($data->total_funding); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_funding')); ?>:</b>
	<?php echo CHtml::encode($data->first_funding); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('second_funding')); ?>:</b>
	<?php echo CHtml::encode($data->second_funding); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('third_funding')); ?>:</b>
	<?php echo CHtml::encode($data->third_funding); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('forth_funding')); ?>:</b>
	<?php echo CHtml::encode($data->forth_funding); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fif_funding')); ?>:</b>
	<?php echo CHtml::encode($data->fif_funding); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('funding_2014')); ?>:</b>
	<?php echo CHtml::encode($data->funding_2014); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('funding_2015')); ?>:</b>
	<?php echo CHtml::encode($data->funding_2015); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('funding_2016')); ?>:</b>
	<?php echo CHtml::encode($data->funding_2016); ?>
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