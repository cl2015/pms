<?php
/* @var $this MemberController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'人员',
);

$this->menu=array(
	array('label'=>'创建', 'url'=>array('create')),
	array('label'=>'管理', 'url'=>array('admin')),
	array('label'=>'设置', 'url'=>array('setting')),	
	array('label'=>'统计', 'url'=>array('stat')),
	array('label'=>'导出', 'url'=>array('export'),'linkOptions'=>array('onclick'=>'var years = prompt("years",2012);if(years==null){return false;}else{this.href+="?years="+years}','id'=>'abc')),
	array('label'=>'导入到access', 'url'=>array('access')),
		
);
?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'member-grid',
	'dataProvider'=>$dataProvider,
	'enableSorting'=>true,
	'columns'=>array_merge(array(
		array(
			'type'=>'raw',
			'value'=>'CHtml::link(CHtml::encode($data->id), array("view", "id"=>$data->id));',
			'name'=>'id',
		),
		
	) ,$column),
)); ?>
