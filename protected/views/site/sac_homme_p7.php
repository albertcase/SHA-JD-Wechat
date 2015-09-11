<div class="product">
    <span class="btsound"></span>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_homme_pro/thomas1.jpg" width="100%" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_homme_pro/thomas2.jpg" width="100%"/>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_homme_pro/thomas3.jpg" width="100%"/>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_homme_pro/thomas4.jpg" width="100%"/>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <h1 class="product_title">Thomas noir lambskin</h1>
    <div class="btn-wishlist">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/heart.png" />
        <p>加入收藏</p> 
    </div>
    <div class="tab">
        <ul class="menu">
            <li class="active">描述</li>
            <!-- <li>特点</li> -->
           
        </ul>
        <div class="con1">
            <ul>    
                <li>
                   Thomas 黑色泡泡羔羊皮包是一款以学生书包风格打造的剑桥包。一款简约无过多修饰的设计，可以像变色龙一样融入任何场合，无论是办公室还是街头。最大的特点是可调节宽背带和小抓柄，您既可以轻松拎起或是单肩斜跨。 无论搭乘地铁或是骑代步车或自行车，这款设计精巧、容量超大的包包是您日常生活的完美伴侣。   
                </li>
            </ul>
        </div>
        <!-- <div class="con2">
            <ul>    
                <li>s</li>
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
    var mySound = new buzz.sound( "<?php echo Yii::app()->request->baseUrl; ?>/sound/homme/Thomas", {
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

