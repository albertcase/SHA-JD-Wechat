<div class="product">
    <span class="btsound"></span>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_femme_pro/momo1.jpg" width="100%" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_femme_pro/momo2.jpg" width="100%"/>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_femme_pro/momo3.jpg" width="100%"/>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_femme_pro/momo4.jpg" width="100%"/>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <h1 class="product_title">Momo opium watersnake</h1>
    <div class="btn-wishlist">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/heart.png" />
        <p>加入收藏</p> 
    </div>
    <div class="tab">
        <ul class="menu">
            <li class="active">描述</li>
            <!--  <li>特点</li> -->
           
        </ul>
        <div class="con1">
            <ul>    
                <li>
                    Momo 鸦片色水蛇皮包是一款完美的小型手袋，已成为Jérôme Dreyfuss风格的招牌。 这款手袋最大的特点是可拆卸皮制肩带，您既可以挎在肩上或是作为手拎包携带，甚至当成钱夹使用。 这款迷你手袋还有一个可拆卸的小袋，拉开拉链里面的小隔间可以更好地收纳您的必需品。适于夜晚放松或白天装扮；也可以搭配大型购物袋。 
                </li>
            </ul>
        </div>
        <!-- <div class="con2">
            <ul>    
                <li>ss</li>
            </ul>  
        </div> -->
    </div>
</div>  

<script>        
    var mySwiper = new Swiper ('.swiper-container', {
        effect:'slide',
        pagination: '.swiper-pagination',
    })        
</script>
<script>
    var mySound = new buzz.sound( "<?php echo Yii::app()->request->baseUrl; ?>/sound/femme/Momo", {
    formats: [  "mp3" ]
});
     $('.btsound').click(function(){
        mySound.play()       
       });

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
