<div class="product">
    <h1 class="pro_line"></h1>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_homme_pro/marc1.jpg" width="100%" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_homme_pro/marc2.jpg" width="100%"/>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_homme_pro/marc3.jpg" width="100%"/>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_homme_pro/marc4.jpg" width="100%"/>
            </div>
            
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <h1 class="product_title">Marc kaki noirci goatskin</h1>

    <div class="tab">
        <ul class="menu">
            <li class="active">描述</li>
            <!-- <li>特点</li> -->
           
        </ul>
        <div class="con1">
            <ul>    
                <li>
                   特点： Marc S 黑色泡泡羔羊皮包，小一型号的Marc，是一款全新的适于轻便出行的小型信使包。 <br/>
                   用途： Marc S适用于全天候各种场合。理想的尺寸可以容纳全部必需品：钱夹、钥匙、眼镜……  <br/>
                   亮点： 两根推进式扣带确保包内物品的安全。  
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

