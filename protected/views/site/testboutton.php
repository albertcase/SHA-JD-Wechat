
<div id="category">
	<header>
		<div id="top"><h1>女士鞋履</h1></div>
		<div class="disclaimer">以上显示为我们的部分产品，查看全部系列请移至官网。非常抱歉，暂不支持中国大陆配送服务。欢迎您们前置实体店铺购买。祝您购物愉快！</div>
	</header>
	<div id="wrap-items">
		<div class="item">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/chaussures/chaussures1.jpg" />
	        <div class="title">BEA</div>
	        <p class="price">€505.00</p>
	        <p class="info">Béa point鸦片色状水蛇皮凉鞋</p>
		</div>
		<div class="item">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/chaussures/chaussures2.jpg" />
	        <div class="title">BIBOOTS</div>
	        <p class="price">€870.00</p>
	        <p class="info">Béa point鸦片色状水蛇皮凉鞋</p>
		</div>
		<div class="item-large">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/chaussures/chaussures3.jpg" />
	        <div class="title"></span>FRANCOISE</div>
	        <p class="price"> €470.00</p>
	        <p class="info">Béa point鸦片色状水蛇皮凉鞋</p>
		</div>
		<div class="item">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/chaussures/chaussures4.jpg" />
	        <div class="title"></span>CHEYENNE</div>
	        <p class="price">€540.00</p>
	        <p class="info">Béa point鸦片色状水蛇皮凉鞋</p>
		</div>
		<div class="item">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/chaussures/chaussures5.jpg" />
	        <div class="title"></span>PINPIN</div>
	        <p class="price">€525.00</p>
	        <p class="info">Béa point鸦片色状水蛇皮凉鞋</p>
		</div>
		<div class="item-large">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/chaussures/chaussures6.jpg" />
	        <div class="title"></span>RUN</div>
	        <p class="price">€415.00</p>
	        <p class="info">Béa point鸦片色状水蛇皮凉鞋</p>
		</div>
		<div class="item">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/chaussures/chaussures7.jpg" />
	        <div class="title"></span>SUZANNE</div>
	        <p class="price">€455.00</p>
	        <p class="info">Béa point鸦片色状水蛇皮凉鞋</p>
		</div>
		<div class="item">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/chaussures/chaussures8.jpg" />
	        <div class="title"></span>WANDA</div>
	        <p class="price">€470.000</p>
	        <p class="info">Béa point鸦片色状水蛇皮凉鞋</p>
		</div>
	</div>
</div>




<div id="wrap-products">
	<div class="swiper-container">
        <div class="swiper-wrapper">
        	<div class="swiper-slide">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/chaussures/chaussures1.jpg" />
			</div>
			<div class="swiper-slide">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/chaussures/chaussures1.jpg" />
			</div>
			<div class="swiper-slide">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/chaussures/chaussures1.jpg" />
			</div>
			<div class="swiper-slide">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/chaussures/chaussures1.jpg" />
			</div>
			<div class="swiper-slide">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/chaussures/chaussures1.jpg" />
			</div>
		</div>
        <div class="swiper-pagination"></div>
    </div>	
    <h2 class="title">BEA</h2>
	<p class="price">€505.00</p>
	<div id="nav">
		<!-- <a href="" class="btn-wishlist">加入收藏</a><a class="son">&#9835;</a> -->
		<?php require_once("btwishlist-inc.php"); ?>
	</div>
	<div id="menu"><div class="active">蛇皮</div></div>
	<div class="text-bottom">
        Run 黑色背部切槽小牛皮鞋是一款轻捷的运动鞋，特点是柔和的线条给人以复古的精神。软皮裁剪出的阳刚外形打造出魅力无边的中性风情。厚实橡胶鞋底和维可牢系带把街头文化融入传统的女鞋系列。Run让Jérôme Dreyfuss把刚毅与柔美完美融合。  
    </div>
    <?php require_once("footer-inc.php"); ?>
<!--     <footer>
		加入收藏
	</footer> -->
</div>

<script>
    var mySound = new buzz.sound( "<?php echo Yii::app()->request->baseUrl; ?>/sound/Chaussures/Bea", {
        formats: [  "mp3" ]
    });
    $('.btsound').click(function(){
        mySound.play()       
    });

</script>  





















