<div class="star">
	<div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/stars/ashley_greene-crop.JPG"  />
                <p>阿什利·格林</p>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/stars/diane_kruger-crop.JPG" />
                <p>黛安·克鲁格</p>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/stars/emma_roberts-crop.JPG" />
                <p>艾玛·罗伯茨</p>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/stars/sarah_jessica_parker-crop.JPG" />
                <p>莎拉·杰西卡·帕克</p>
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


