<div class="product">
    <h1 class="pro_line"></h1>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_femme_pro/igor1.jpg" width="100%" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_femme_pro/igor2.jpg" width="100%"/>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_femme_pro/igor3.jpg" width="100%"/>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_femme_pro/igor4.jpg" width="100%"/>
            </div>
            
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <h1 class="product_title">Igor mada python</h1>

    <div class="tab">
        <ul class="menu">
            <li class="active">描述</li>
            <li>特点</li>
           
        </ul>
        <div class="con1">
            <ul>    
                <li>
                    Igor mada 蟒蛇皮包是一款无法抗拒的斜挎包，外形尺寸与内部容量的完美平衡，尤其适于都市冒险家。这只包包最大的特点是可调节肩带，您有四个调节点来设定您想要的任何长度，无论是肩挎还是斜挎。无论是骑电动车、骑自行车或是搭地铁，他是您日常出行的完美伙伴。 带拉链的内衬可以调节手袋的大小，内部有三个隔间，让您轻松收纳所有必需品，这是一款让您爱不释手的时尚日用包。
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