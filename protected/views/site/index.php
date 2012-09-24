<?php
/* @var $this SiteController */

$this->pageTitle=$this->setting->name;
?>
<div style="text-align:center;"><?php echo CHtml::image(Yii::app()->baseUrl . $this->setting->image);?></div>