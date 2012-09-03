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

<h1>论著</h1>

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

