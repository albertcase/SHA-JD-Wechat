<div class="product">
    <h1 class="pro_line"></h1>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_femme_pro/virgile1.jpg" width="100%" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_femme_pro/virgile2.jpg" width="100%"/>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_femme_pro/virgile3.jpg" width="100%"/>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_femme_pro/virgile4.jpg" width="100%"/>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <h1 class="product_title">Virgile kaki noirci goatskin</h1>

    <div class="tab">
        <ul class="menu">
            <li class="active">描述</li>
            <li>特点</li>
           
        </ul>
        <div class="con1">
            <ul>    
                <li>
                   Virgile 黑卡其山羊皮包是Raymond的姐妹款。这款全新小尺寸斜挎包，融入七零年代的马术精神，辫状抓柄与链系肩带把实用性与毫不妥协的奢华细节相结合。<br/>
                   用途： 不要被他的外表欺骗，Virgile拥有容纳您所有必需品的空间：零钱包、眼睛、钥匙、手机……从日出到日落，甚至是午夜的派对狂欢。<br/>
                   亮点： 多重拎挎选择，磁性按扣设计，他是您既实用又时尚的珍贵伙伴。
                </li>
            </ul>
        </div>
        <div class="con2">
            <ul>    
                <li>ss</li>
            </ul>  
        </div>
    </div>
</div>  

<script>        
    var mySwiper = new Swiper ('.swiper-container', {
        effect:'fade',
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
</script>