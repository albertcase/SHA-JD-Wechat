<div class="product">
    <h1 class="pro_line"></h1>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/accessories_pro/popochel1.jpg" width="100%" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/accessories_pro/popochel2.jpg" width="100%"/>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/accessories_pro/popochel3.jpg" width="100%"/>
            </div>
            
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <h1 class="product_title">Popoche L turquoise lambskin</h1>

    <div class="tab">
        <ul class="menu">
            <li class="active">描述</li>
            <!-- <li>特点</li> -->
           
        </ul>
        <div class="con1">
            <ul>    
                <li>
                    Popoche L 绿松石色羔羊珠皮钱包是一款大型拉链钱包，适于室内外场合携带。可以塞入您的手袋里，是收纳您全部必需品的完美配件，单独携带时，他又摇身变为纤细、时尚又现代的手拎包。外部的链圈设计可以与您手袋内部的锁链连接，让他成为真正的日常配饰。从白天到夜晚，他能瞬间提升您晚装打扮的时尚感；您只需要把他从手袋里面拿出来而已。 
                </li>
            </ul>
        </div>
        <!-- <div class="con2">
            <ul>    
                <li>ss</li>
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
