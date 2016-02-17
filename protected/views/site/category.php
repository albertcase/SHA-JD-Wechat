
<script type="text/javascript">var baseurl = "<?php echo Yii::app()->request->baseUrl; ?>"; var categorie = "<?php if (isset($_GET['cat'])) echo $_GET['cat']; ?>";var produit = "<?php if (isset($_GET['prod'])) echo $_GET['prod']; ?>";</script>
<div id="category">
	<header>
		<div class="top"><h1>女士鞋履</h1></div>
		<div class="disclaimer">以上显示为我们的部分产品，查看全部系列请移至官网。非常抱歉，暂不支持中国大陆配送服务。欢迎您们前置实体店铺购买。祝您购物愉快！</div>
	</header>
	<div id="wrap-items">
	</div>
</div>
<div id="products">
	<div class="swiper-container">
        <div class="swiper-wrapper"></div>    
    </div>
    <div class="swiper-pagination"></div>
    <h2 class="title"></h2>
	<p class="price"></p>
	<div class="info"></div>
	<div id="nav">
		<?php require_once("btwishlist-inc.php"); ?>
	</div>
	<div id="menu"><div class="active">描述</div></div>
	<div class="text-bottom"></div>
    <?php require_once("footer-inc.php"); ?>
</div>
<div id="wishlist">
	<div class="header">
		<div class="top">
		  <h1>心愿单</h1>
		</div>
	</div>
	<ul id="wishes"></ul>
	<div id="footer">
    	<span class="back">返回</span>
    </div> 
</div>

<div id="top-transition"></div>
<div id="bottom-transition"></div>
<div id="background-transition"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" id="logo"/></div>


















