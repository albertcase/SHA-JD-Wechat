<!DOCTYPE HTML>
<html>
<head>
	<title>JeromeDreyfuss</title>
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

	<link rel="stylesheet" type="text/css" href="css/reset.css" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/swiper.css" />
	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/swiper.jquery.js"></script>

</head>
<body>
    <div id="orientLayer" class="mod-orient-layer">
        <div class="mod-orient-layer__content">
            <i class="icon mod-orient-layer__icon-orient"></i>
            <div class="mod-orient-layer__desc">为了更好的体验，请使用竖屏浏览</div>
        </div>
    </div>

    <div class="product">
        <h1 class="pro_line"></h1>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/sac_homme_pro/franky1.jpg" width="100%" />
                </div>
                <div class="swiper-slide">
                    <img src="images/sac_homme_pro/franky2.jpg" width="100%"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/sac_homme_pro/franky3.jpg" width="100%"/>
                </div>
                <div class="swiper-slide">
                    <img src="images/sac_homme_pro/franky4.jpg" width="100%"/>
                </div>
                
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <h1 class="product_title">Franky noir lambskin</h1>

        <div class="tab">
            <ul class="menu">
                <li class="active">描述</li>
                <li>特点</li>
               
            </ul>
            <div class="con1">
                <ul>    
                    <li>Franky 黑色泡泡羔羊皮包是一款细腻又犀利的设计作品，可以有两种背挎方式，全部展开可以容纳工作文件夹，折叠起来又便于您骑自行车或是繁忙都市里穿行。这只包包专为都市旅行家和说走就走的专业人士打造。其特点包括一根可调节肩带和一根皮制小抓柄，您既可以手拎或是折叠起来成为信使包样挎在肩上。</li>
                </ul>
            </div>
            <div class="con2">
                <ul>    
                    <li>s</li>
                </ul>  
            </div>
        </div>
    </div>  

	

<script>        
    var mySwiper = new Swiper ('.swiper-container', {
        effect:'fade',
        pagination: '.swiper-pagination',
    })        
</script>
<script>         
    $(function () {
       $('.tab ul.menu li').click(function(){
            //获得当前被点击的元素索引值
            var Index = $(this).index();
            //给菜单添加选择样式
            $(this).addClass('active').siblings().removeClass('active');
            //显示对应的div
            $('.tab').children('div').eq(Index).show().siblings('div').hide();
       
       });
    });    
</script>

</body>
</html>
