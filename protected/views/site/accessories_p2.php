<div class="product">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/accessories_pro/malcom1.jpg" width="100%" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/accessories_pro/malcom2.jpg" width="100%"/>
            </div>
            
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <h1 class="product_title">Malcom noir python</h1>
    <p class="price-btn">€570.00</p>
    <?php require_once("btwishlist-inc.php"); ?>
    <div class="tab">
        <ul class="menu">
            <li class="active">描述</li>
            <!-- <li>特点</li> -->
           
        </ul>
        <div class="con1">
            <ul>    
                <li>
                    Malcom 黑色蟒蛇皮钱包专为那些需要携带更多物件都又不想过于重负的女性设计。修长、光滑、空间紧凑，可以塞进您的手袋里面。虽然比原创的Jérôme Dreyfuss钱夹设计更苗条，但是并不意味着有隔间或收纳空间的牺牲，她定会成为您的最爱。 
                </li>
            </ul>
        </div>
    </div>
    <?php require_once("footer-inc.php"); ?>
</div> 
<script>
    var mySound = new buzz.sound( "<?php echo Yii::app()->request->baseUrl; ?>/sound/Accessoires/Malcom", {
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
        $('#ctawishlist').click(function(){
            if ( !$(this).hasClass("wait") && !$(this).hasClass("on") ){
                $(this).addClass("wait");
                $(this).find(".wait").animate({width:129},200);
                setTimeout(function(){
                $.ajax({
                    url : 'addwishlist?idproduct=2', 
                    type : 'GET' ,
                    success: function(data) {
                        $(this).addClass("on");
                        $('.btn-wishlist.on').animate({width:129},200);                                
                    },
                    error: function(xhr, status, error) { console.log('error' + xhr.responseText + status + error); }
                    });
                }, 300);
            }
        });  
    });
    
</script>
