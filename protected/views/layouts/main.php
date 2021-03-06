<!DOCTYPE HTML>
<html>
<head>
	<title>Jérôme Dreyfuss</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="format-detection" content="telephone=no">
	<!--禁用手机号码链接(for iPhone)-->
	<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimum-scale=1.0,maximum-scale=1.0,minimal-ui" />
	<!--自适应设备宽度-->
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<!--控制全屏时顶部状态栏的外，默认白色-->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="Keywords" content="">
	<meta name="Description" content="...">

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/spring/reset.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/spring/swiper.min.css" />
	<!--link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/spring/main.css?v=0.1" /-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/spring/style.css" />
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/spring/jquery.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/spring/swiper.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/spring/buzz.js"></script>
	<?php
			$action=$this->getAction();
			if ($action->getId() == "category")
				echo '<script type="text/javascript" src="'.Yii::app()->request->baseUrl.'/js/spring/app.js"></script>';
	?>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/spring/jquery.waitforimages.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/spring/jquery.cookie.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/spring/greensock/TweenMax.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/spring/greensock/easing/EasePack.min.js"></script>

</head>
<body>
	<div id="orientLayer" class="mod-orient-layer">
	    <div class="mod-orient-layer__content">
		    <i class="icon mod-orient-layer__icon-orient"></i>
		    <div class="mod-orient-layer__desc">为了更好的体验，请使用竖屏浏览</div>
	    </div>
  	</div>
	<?php echo $content;
	?>
</body>
</html>

