<div class="campagne">
     <p class="video-text"> --- 16春夏 ---</p>
    <div class="swiper-container">
        <div class="swiper-wrapper"></div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="links">
        <p class="nameprod"> 产品细节: </p>
        <a href="http://jdwechat.samesamechina.com/site/sac_femme_p2" class="btn-campagne"> Bobi法棍包 </a>
    </div>

</div>
<script type="text/javascript">

var baseurl = "<?php echo Yii::app()->request->baseUrl; ?>";
var dta;
var myswiper;
var tmp;
$( document ).ready(function() {
    $.getJSON("../data/config.json", function(data){
        dta = data;
        initPage();
    });
});

function initPage(){
    var cat = "sacfemme";
    var articles = dta.categories[cat].articles;
    for (var i = 0; i < articles.length; i++) {
        if ( articles[i].slider.length >= 4 )
            $(".swiper-wrapper").append('<div class="swiper-slide" data-id="'+i+'"><img src="'+baseurl+articles[i].slider[3]+'" width="100%" /></div>')
    }
     
    $('.swiper-wrapper').waitForImages({
        finished: function() {
            setTimeout(function(){
                myswiper = new Swiper ('.swiper-container', {
                    pagination: '.swiper-pagination',
                    paginationClickable: true
                })

                myswiper.on('slideChangeStart', function (swiper) {
                    $('.links').stop().animate({
                        opacity: 0
                    }, 200, function() {
                        var num = myswiper.activeIndex
                        $('.nameprod').html( dta.categories[cat].articles[$(myswiper.slides[num]).attr("data-id")].nom );
                        $('.btn-campagne').html( dta.categories[cat].articles[$(myswiper.slides[num]).attr("data-id")].infos );
                        $('.btn-campagne').attr("href", baseurl+"/site/category?cat=sacfemme&prod="+$(myswiper.slides[num]).attr("data-id") );
                    }).animate({
                        opacity: 1
                    }, 200);
                });

            },100);
        },
        waitForAll: true
    });
}
</script>

