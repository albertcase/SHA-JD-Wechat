<div class="campagne">
    <div class="bloc-video">
        <video  height="100%" controls="false" src="<?php echo Yii::app()->request->baseUrl; ?>/images/campagne/video.mp4"></video>
    </div>
     <p class="video-text"> --- 看看书秋冬15 ---</p>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/campagne/campagne1.jpg" width="100%" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/campagne/campagne2.jpg" width="100%" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/campagne/campagne8.jpg" width="100%" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/campagne/campagne9.jpg" width="100%" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/campagne/campagne10.jpg" width="100%" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/campagne/campagne11.jpg" width="100%" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/campagne/campagne13.jpg" width="100%" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/campagne/campagne14.jpg" width="100%" />
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
     <p> 产品细节: </p>
     <a href="http://jdwechat.samesamechina.com/site/sac_femme_p2" class="btn-campagne"> Bobi法棍包 </a>

</div>

<script>        
    var mySwiper = new Swiper ('.swiper-container', {
        effect:'slide',
        pagination: '.swiper-pagination'
    })
    mySwiper.on('slideChangeStart', function (swiper) {
        $('.btn-campagne').stop().animate({
            opacity: 0
        }, 200, function() {
            $('.btn-campagne').html( product[swiper.activeIndex][0] );
            $('.btn-campagne').attr("href", product[swiper.activeIndex][1]);
        }).animate({
            opacity: 1
        }, 200);

        console.log(product[swiper.activeIndex][0] + " :: " + product[swiper.activeIndex][1]);
    });
</script>
<script>
var product = [
    ["Bobi法棍包", "http://jdwechat.samesamechina.com/site/sac_femme_p2"],
    ["Mario背包式手袋", "http://jdwechat.samesamechina.com/site/sac_femme_p6"],
    ["Mario背包式手袋", "http://jdwechat.samesamechina.com/site/sac_femme_p6"],
    ["Igor斜挎包", "http://jdwechat.samesamechina.com/site/sac_femme_p5"],
    ["Mario背包式手袋", "http://jdwechat.samesamechina.com/site/sac_femme_p6"],
    ["Bobi法棍包", "http://jdwechat.samesamechina.com/site/sac_femme_p2"],
    ["Bobi法棍包", "http://jdwechat.samesamechina.com/site/sac_femme_p2"],
    ["Gary迷你流苏手袋", "http://jdwechat.samesamechina.com/site/sac_femme_p4"]
];

$('.bloc-video').click(function(){
    $('video').css("display", "block");
});
</script>

