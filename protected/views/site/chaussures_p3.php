<div class="product">
    <?php
    if ( isset($_SESSION["wishlist"]) && count($_SESSION["wishlist"]) != 0)
        echo '<a href="'.Yii::app()->request->baseUrl .'/site/wishlist" class="btwishlist">心愿单</a>';
?>    
<span class="btsound"></span>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/chaussures_pro/bea1.jpg" width="100%" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/chaussures_pro/bea2.jpg" width="100%" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/chaussures_pro/bea3.jpg" width="100%" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/chaussures_pro/bea4.jpg" width="100%" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/chaussures_pro/bea5.jpg" width="100%" />
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <h1 class="product_title">Bea point noir watersnake</h1>
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
                    Béa point 黑色水蛇皮鞋，无与伦比的性感凉鞋，为当季潮流定下基调。设计特点包括前面的流苏，整体造型流露出俏皮的“请上座”的诱人风范，令人难以抗拒其魅力。这款凉鞋凭借其超精致的造型，定为您的时尚格调增色。 
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
    var mySound = new buzz.sound( "<?php echo Yii::app()->request->baseUrl; ?>/sound/Chaussures/Bea", {
    formats: [  "mp3" ]
});
     $('.btsound').click(function(){
        mySound.play()       
       });

</script> 

<script>        
    var mySwiper = new Swiper ('.swiper-container', {
        effect:'slide',
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
     $( document ).ready(function() {
        $('.btn-wishlist').click(function(){
            $(this).animate({opacity:0.2},150)
            setTimeout(function(){
                $.ajax({
                url : 'addwishlist?idproduct=5', 
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
