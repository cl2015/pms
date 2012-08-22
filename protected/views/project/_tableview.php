<?php
/* @var $this ProjectController */
/* @var $model Project */
?>
  <tr>
    <td><?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?></td>
    <td><?php echo CHtml::encode($data->sort); ?></td>
    <td><?php echo CHtml::encode($data->category); ?></td>
    <td><?php echo CHtml::encode($data->name); ?></td>
    <td><?php echo CHtml::encode($data->owner); ?></td>
    <td><?php echo CHtml::encode($data->members); ?></td>
    <td><?php echo CHtml::encode($data->begin_date); ?></td>
    <td><?php echo CHtml::encode($data->end_date); ?></td>
    <td><?php echo CHtml::encode($data->total_funding); ?></td>
    <td><?php echo CHtml::encode($data->first_funding); ?></td>
    <td><?php echo CHtml::encode($data->second_funding); ?></td>
    <td><?php echo CHtml::encode($data->third_funding); ?></td>
    <td><?php echo CHtml::encode($data->forth_funding); ?></td>
    <td><?php echo CHtml::encode($data->fif_funding); ?></td>
    <td><?php echo CHtml::encode($data->equipment_funding); ?></td>
    <td><?php echo CHtml::encode($data->research_direction); ?></td>
  </tr>
