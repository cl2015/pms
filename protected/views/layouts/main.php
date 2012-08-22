<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'主页', 'url'=>array('/site/index')),
				array('label'=>'人员','url'=>array('/member/index')),
				array('label'=>'课题','url'=>array('/project/index')),
				array('label'=>'奖励','url'=>array('/honor/index')),
				array('label'=>'论著','url'=>array('/paper/index')),
				array('label'=>'专利','url'=>array('/patent/index')),
				array('label'=>'标准','url'=>array('/standard/index')),
				array('label'=>'设备','url'=>array('/equipment/index')),
				array('label'=>'主办学术会议','url'=>array('/organizingConference/index')),
				array('label'=>'举办讲座','url'=>array('/seminars/index')),
				array('label'=>'参加学术会议','url'=>array('/attendConference/index')),
				array('label'=>'一般学术活动','url'=>array('/activity/index')),
				array('label'=>'学术委员会组成','url'=>array('/committee/index')),
					
				array('label'=>'实验室','url'=>array('/laboratory/index'),'visible'=>!Yii::app()->user->isGuest&&Yii::app()->user->isAdmin),
				array('label'=>'研究单元','url'=>array('/researchUnit/index'),'visible'=>!Yii::app()->user->isGuest&&Yii::app()->user->isAdmin),
				array('label'=>'研究方向','url'=>array('/researchDirection/index'),'visible'=>!Yii::app()->user->isGuest&&Yii::app()->user->isAdmin),
				array('label'=>'课题类别','url'=>array('/subjectCategory/index'),'visible'=>!Yii::app()->user->isGuest&&Yii::app()->user->isAdmin),
				array('label'=>'论著类别','url'=>array('/paperCategory/index'),'visible'=>!Yii::app()->user->isGuest&&Yii::app()->user->isAdmin),
				array('label'=>'用户','url'=>array('/user/index'),'visible'=>!Yii::app()->user->isGuest&&Yii::app()->user->isAdmin),
				array('label'=>'登录', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'退出 ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by cranelee@gmail.com.<br/>
		All Rights Reserved.<br/>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
