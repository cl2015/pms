<?php
/* @var $this LaboratoryController */
/* @var $model Laboratory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('copyright')); ?>:</b>
	<?php echo CHtml::encode($data->copyright); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area')); ?>:</b>
	<?php echo CHtml::encode($data->area); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_time')); ?>:</b>
	<?php echo CHtml::encode($data->project_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acceptance_time')); ?>:</b>
	<?php echo CHtml::encode($data->acceptance_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_assessment_time')); ?>:</b>
	<?php echo CHtml::encode($data->last_assessment_time); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('lab_director')); ?>:</b>
	<?php echo CHtml::encode($data->lab_director); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_of_birth')); ?>:</b>
	<?php echo CHtml::encode($data->date_of_birth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('degree')); ?>:</b>
	<?php echo CHtml::encode($data->degree); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_academy_of_sciences')); ?>:</b>
	<?php echo CHtml::encode($data->is_academy_of_sciences); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('duty')); ?>:</b>
	<?php echo CHtml::encode($data->duty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('experty')); ?>:</b>
	<?php echo CHtml::encode($data->experty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('commitee_director')); ?>:</b>
	<?php echo CHtml::encode($data->commitee_director); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender2')); ?>:</b>
	<?php echo CHtml::encode($data->gender2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_of_birth2')); ?>:</b>
	<?php echo CHtml::encode($data->date_of_birth2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('degree2')); ?>:</b>
	<?php echo CHtml::encode($data->degree2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title2')); ?>:</b>
	<?php echo CHtml::encode($data->title2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_academy_of_sciences2')); ?>:</b>
	<?php echo CHtml::encode($data->is_academy_of_sciences2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('duty2')); ?>:</b>
	<?php echo CHtml::encode($data->duty2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('experty2')); ?>:</b>
	<?php echo CHtml::encode($data->experty2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dependent')); ?>:</b>
	<?php echo CHtml::encode($data->dependent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('heigher_authorty')); ?>:</b>
	<?php echo CHtml::encode($data->heigher_authorty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nature')); ?>:</b>
	<?php echo CHtml::encode($data->nature); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zip_code')); ?>:</b>
	<?php echo CHtml::encode($data->zip_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('office_phone')); ?>:</b>
	<?php echo CHtml::encode($data->office_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('office_fax')); ?>:</b>
	<?php echo CHtml::encode($data->office_fax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_evaluation_time')); ?>:</b>
	<?php echo CHtml::encode($data->first_evaluation_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('second_evaluation_time')); ?>:</b>
	<?php echo CHtml::encode($data->second_evaluation_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('third_evaluation_time')); ?>:</b>
	<?php echo CHtml::encode($data->third_evaluation_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('forth_evaluation_time')); ?>:</b>
	<?php echo CHtml::encode($data->forth_evaluation_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fifth_evaluation_time')); ?>:</b>
	<?php echo CHtml::encode($data->fifth_evaluation_time); ?>
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