<div class="product">
    <h1 class="pro_line"></h1>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_femme_pro/bobi1.jpg" width="100%" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_femme_pro/bobi2.jpg" width="100%"/>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_femme_pro/bobi3.jpg" width="100%"/>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_femme_pro/bobi4.jpg" width="100%"/>
            </div>
            
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <h1 class="product_title">Bobi rouille lambskin</h1>

    <div class="tab">
        <ul class="menu">
            <li class="active">描述</li>
            <li>特点</li>
           
        </ul>
        <div class="con1">
            <ul>    
                <li>
                    Bobi 铁锈色羔羊皮包是一款法棍包，Albert的姐妹款。白天上街、晚餐约会或是午夜狂欢……他是任何场合的吸睛利器。配有方便实用的可调节肩带，别致的链节加工展现匠心独运的精巧设计。这款精美又实用的手袋能够毫不费力地实现白天到夜晚各种场合的轻松转换。通过带拉链的内衬可以随心调节包包的尺寸与容纳能力，再加上可拆卸镜子，这款手袋几乎可以应对任何场合。
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