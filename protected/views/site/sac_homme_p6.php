<div class="product">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_homme_pro/roland1.jpg" width="100%" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_homme_pro/roland2.jpg" width="100%"/>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_homme_pro/roland3.jpg" width="100%"/>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/sac_homme_pro/roland4.jpg" width="100%"/>
            </div>
            
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <h1 class="product_title">Roland noir lambskin</h1>
    <p class="price-btn">€570.00</p>
    <?php require_once("btwishlist-inc.php"); ?>
    <div class="tab">
        <ul class="menu">
            <li class="active">描述</li>
           <!--  <li>特点</li> -->
           
        </ul>
        <div class="con1">
            <ul>    
                <li>
                   Roland 黑色泡泡羔羊皮包是一款为都市探险家打造的休闲不失阳刚的双肩包。宽大的肩带既实用又舒适，这只包包最大的特点是拥有众多隔间和横向松紧带，能够保证笔记本电脑或远足装备的安全。这款配饰适于热爱运动但也需要脚踏实地的男士。  
                </li>
            </ul>
        </div>
        <!-- <div class="con2">
            <ul>    
                <li>s</li>
            </ul>  
        </div> -->
    </div>
    <?php require_once("footer-inc.php"); ?>
</div>  

	
<script>        
    var mySwiper = new Swiper ('.swiper-container', {
        effect:'slide',
        pagination: '.swiper-pagination',
    })        
</script>
<script>
    var mySound = new buzz.sound( "<?php echo Yii::app()->request->baseUrl; ?>/sound/Homme/Roland", {
    formats: [  "mp3" ]
});
     $('.btsound').click(function(){
        mySound.play()       
       });

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
    $( document ).ready(function() {
        $('#ctawishlist').click(function(){
            if ( !$(this).hasClass("wait") && !$(this).hasClass("on") ){
                $(this).addClass("wait");
                $(this).find(".wait").animate({width:129},200);
                setTimeout(function(){
                $.ajax({
                    url : 'addwishlist?idproduct=27', 
                    type : 'GET' ,
                    success: function(data) {
                        $(this).addClass("on");
                        $('.btn-wishlist.on').animate({width:129},200);                                
                    },
                    error: function(xhr, status, error) { console.log('error' + xhr.responseText + status + error); }
                    });
                }, 300);
            }
        });  
    });
   
</script>
