<div class="product">
    <?php
    if ( isset($_SESSION["wishlist"]) && count($_SESSION["wishlist"]) != 0)
        echo '<a href="'.Yii::app()->request->baseUrl .'/site/wishlist" class="btwishlist">心愿单</a>';
?>    
    <span class="btsound"></span>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/accessories_pro/popochel1.jpg" width="100%" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/accessories_pro/popochel2.jpg" width="100%"/>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/accessories_pro/popochel3.jpg" width="100%"/>
            </div>
            
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <h1 class="product_title">Popoche L turquoise lambskin</h1>
    <p class="price-btn">€195.00</p>
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
                    Popoche L 绿松石色羔羊珠皮钱包是一款大型拉链钱包，适于室内外场合携带。可以塞入您的手袋里，是收纳您全部必需品的完美配件，单独携带时，他又摇身变为纤细、时尚又现代的手拎包。外部的链圈设计可以与您手袋内部的锁链连接，让他成为真正的日常配饰。从白天到夜晚，他能瞬间提升您晚装打扮的时尚感；您只需要把他从手袋里面拿出来而已。 
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
    var mySound = new buzz.sound( "<?php echo Yii::app()->request->baseUrl; ?>/sound/Accessoires/Popoche-l", {
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
                url : 'addwishlist?idproduct=3', 
                type : 'GET',
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
