<div class="product">
     <?php
    if ( isset($_SESSION["wishlist"]) && count($_SESSION["wishlist"]) != 0)
        echo '<a href="'.Yii::app()->request->baseUrl .'/site/wishlist" class="btwishlist">心愿单</a>';
?>    
    <span class="btsound"></span>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_femme_pro/florent1.jpg" width="100%" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_femme_pro/florent2.jpg" width="100%"/>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_femme_pro/florent3.jpg" width="100%"/>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_femme_pro/florent4.jpg" width="100%"/>
            </div>
            
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <h1 class="product_title">Florent noir lambskin</h1>
    <p class="price-btn">€560.00</p>
    <div class="btn-wishlist">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/heart.png" />
        <p>加入收藏</p> 
    </div>
    <div class="go-wishlist">
        <a href="">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/check.png" />
        <p>进入收藏</p> 
        </a>
    </div>
    <div class="tab">
        <ul class="menu">
            <li class="active">描述</li>
            <!-- <li>特点</li> -->
           
        </ul>
        <div class="con1">
            <ul>    
                <li>
                    Florent 黑色泡泡羔羊皮包是一款小型双肩背包，从九十年代的运动时尚精神汲取灵感，设计精巧，可以轻松容纳您的所有日常必需品！顶部有一根小巧的皮制抓柄，另有两条可调节皮链肩带，您既可以单手提顶部，也可以背在肩上。虽然是双肩包，却有着剑桥包的感觉。滑动拉绳设计让这款日用包造型流畅、低调又方便实用。背部的拉链设计是其另一特点，他是通往包包内部的秘密入口！  
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
    var mySound = new buzz.sound( "<?php echo Yii::app()->request->baseUrl; ?>/sound/Femme/Florent", {
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
    $( document ).ready(function() {
        $('.btn-wishlist').click(function(){
            $(this).animate({opacity:0.2},150)
            setTimeout(function(){
                $.ajax({
                url : 'addwishlist?idproduct=14', 
                type : 'GET' ,
                  success: function(data) {   
                                            $('.btn-wishlist').fadeOut(100);
                                            $('.go-wishlist').delay(100).fadeIn(200);
                                              
            },
                error: function(xhr, status, error) { console.log('error' + xhr.responseText + status + error); }
            });
            }, 200);
        });
            
    });

</script>
