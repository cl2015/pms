<?php
/* @var $this SettingController */
/* @var $model Setting */

$this->breadcrumbs=array(
	'人员'=>array('index'),
	'设置',
);

$this->menu=array(
	array('label'=>'列表', 'url'=>array('index')),
	array('label'=>'创建', 'url'=>array('create')),
	array('label'=>'管理', 'url'=>array('admin')),
	array('label'=>'导出', 'url'=>array('export'),'linkOptions'=>array('onclick'=>'var years = prompt("years",2012);if(years==null){return false;}else{this.href+="?years="+years}','id'=>'abc')),
);
?>

<h1>更新设置</h1>

<?php echo $this->renderPartial('_setting_form', array('model'=>$model)); ?>