<div class="product">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_femme_pro/raymond1.jpg" width="100%" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_femme_pro/raymond2.jpg" width="100%"/>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_femme_pro/raymond3.jpg" width="100%"/>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_femme_pro/raymond4.jpg" width="100%"/>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <h1 class="product_title">Raymond kaki lambskin</h1>
    <p class="price-btn">€915.00</p>
    <?php require_once("btwishlist-inc.php"); ?>
    <div class="tab">
        <ul class="menu">
            <li class="active">描述</li>
            <!-- <li>特点</li> -->
           
        </ul>
        <div class="con1">
            <ul>    
                <li>
                    Raymond 卡其色羔羊珠皮包是一款全新的兼具优雅与实用的斜挎包。大容量内部空间和马术风格的外观让他成为意气风发的伴侣。<br/>
                    用途： 辫状抓柄和链系肩带让Raymond成为一名优雅的伙伴。他可以轻松携带您A4大小的文件、平板电脑……<br/>
                    亮点： 手提或肩背或斜挎以解放您的双手。极具功能性的设计，手机袋和带拉链的口袋让他可以把所有的东西收纳到位。Raymond大获好评！
                </li>
            </ul>
        </div>
        <!-- <div class="con2">
            <ul>    
                <li>ss</li>
            </ul>  
        </div> -->
    </div>
    <?php require_once("footer-inc.php"); ?>
</div>  

<script>        
    var mySwiper = new Swiper ('.swiper-container', {
        effect:'slide',
        pagination: '.swiper-pagination',
    })        
</script>
<script>
    var mySound = new buzz.sound( "<?php echo Yii::app()->request->baseUrl; ?>/sound/Femme/Raymond", {
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
        $('.btn-wishlist.off').click(function(){
            if ( !$(this).parent().hasClass("wait") && !$(this).parent().hasClass("on") ){
                $(this).parent().addClass("wait");
                $(this).parent().find(".wait").animate({width:129},200);
                setTimeout(function(){
                $.ajax({
                    url : 'addwishlist?idproduct=2', 
                    type : 'GET' ,
                    success: function(data) {
                        $(this).parent().addClass("on");
                        $('.btn-wishlist.on').animate({width:129},200);                                
                    },
                    error: function(xhr, status, error) { console.log('error' + xhr.responseText + status + error); }
                    });
                }, 300);
            }
        });  
    });
   
</script>
