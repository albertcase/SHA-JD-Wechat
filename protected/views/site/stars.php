<div class="star">
	<div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/stars/stars-pict01.jpg" width="100%" />
                <p> --- 莎拉·杰西卡·帕克 ---</p>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/stars/stars-pict02.jpg" width="100%"/>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/stars/stars-pict03.jpg" width="100%"/>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/stars/stars-pict04.jpg" width="100%"/>
            </div>
            
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<script>        
    var mySwiper = new Swiper ('.swiper-container', {
        effect:'slide',
        pagination: '.swiper-pagination',
    })        
</script>


