<?php
/* @var $this PaperController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'论著',
);

$this->menu=array(
	array('label'=>'创建', 'url'=>array('create')),
	array('label'=>'管理', 'url'=>array('admin')),
);
?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'project-form',
	'enableAjaxValidation'=>false,
)); ?>
<div class="span-18">
	<?php echo $form->checkBoxList($model,'paper_category',array(2012,2013,2014,2015),array('template'=>'<div class="span-5"> <span style="float:left;margin-right:10px;">{input}</span><span style="float:left">{label}</span></div>','separator'=>'')); ?>
</div>
<?php $this->endWidget(); ?>
</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'paper-grid',
	'dataProvider'=>$dataProvider,
	'enableSorting'=>false,
	'columns'=>array(
		array(
			'type'=>'raw',
			'value'=>'CHtml::link(CHtml::encode($data->id), array("view", "id"=>$data->id));',
			'name'=>'id',
		),
		'title',
		'author',
		'post_time',
		'periodical_info',
		'paper_category',
		'research_direction',
		array('name'=>'detail',
			'type'=>'raw',
            'value'=>'CHtml::link(CHtml::encode("查看"),$data->detail,array("target"=>"_blank"))'),
	),
)); ?>

