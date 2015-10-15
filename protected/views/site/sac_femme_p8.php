<div class="product">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_femme_pro/paco1.jpg" width="100%" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_femme_pro/paco2.jpg" width="100%"/>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_femme_pro/paco3.jpg" width="100%"/>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_femme_pro/paco4.jpg" width="100%"/>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <h1 class="product_title">Paco bandana fabric</h1>
    <p class="price-btn">€695.00</p>
    <?php require_once("btwishlist-inc.php"); ?>
    <div class="tab">
        <ul class="menu">
            <li class="active">描述</li>
            <!-- <li>特点</li> -->
           
        </ul>
        <div class="con1">
            <ul>    
                <li>
                    Paco 大手帕织物包是一款全新的新托特包，极简主义的外形设计却有着非一般的超大容量。时尚又具有功能性，他是一位优雅的贴身伙伴。<br/>
                    用途： 对Paco而言，没有装不下一说。他将全天候跟随您，携带您的文件、平板电脑……或是下班使用的随身用具。<br/>
                    亮点： 可以手提也可以肩挎，多重口袋设计是条理分明的女性的理想伴侣。 
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
    var mySound = new buzz.sound( "<?php echo Yii::app()->request->baseUrl; ?>/sound/Femme/Paco", {
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
                    url : 'addwishlist?idproduct=`éà', 
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
