<div class="product">
    <h1 class="pro_line"></h1>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/accessories_pro/julien1.jpg" width="100%" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/accessories_pro/julien2.jpg" width="100%"/>
            </div>
            
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <h1 class="product_title">Julien noir python</h1>

    <div class="tab">
        <ul class="menu">
            <li class="active">描述</li>
            <li>特点</li>
           
        </ul>
        <div class="con1">
            <ul>    
                <li>
                    Julien黑色蟒蛇皮钱夹，Malcom的小表弟，Denis的兄长，是一款全新推出的能容纳全部个人身份证件的钱夹。<br/>
                    用途： Julien随时待命收纳您的日需品：多重卡槽、小零钱袋、用于装支票、地铁卡和身份证件的空间……<br/>
                    亮点： 这款精巧的配饰可以塞进Bobi、Virgile、Mario以及Twee Mini……  
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