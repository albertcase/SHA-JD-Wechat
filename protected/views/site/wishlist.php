
<script type="text/javascript">
var url = "<?php echo Yii::app()->request->baseUrl ?>";
</script>

<div class="wishlist">
  <div class="header">
    <div class="header-title">
      <span class="sep"></span>
      <p class="title">心愿单</p>
      <span class="sep"></span>
    </div>
  </div>
	<ul>
		<?php
			if ( isset($_SESSION['wishlist']) && count($_SESSION['wishlist']) != 0 ){
				echo "count :: ".count($_SESSION['wishlist'])."<br>";
				print_r($_SESSION['wishlist']);
				/*foreach ($_SESSION['wishlist'] as $key => $value) {
					echo '<li>
							<a href="'.Yii::app()->request->baseUrl .''. $array[ $value ]["lien"].'">
								<div class="img-wishlist">
									<img src="'.Yii::app()->request->baseUrl .''. $array[ $value ]["image"].'" />
								</div>
								<div class=" text-wishlist">
									<p>'.$array[ $value ]["nom"].'</p>
									<p>'.$array[ $value ]["prix"].'</p>
									<p>'.$array[ $value ]["traduction"].'</p>
								</div>
							</a>
							<img src="'.Yii::app()->request->baseUrl .'/images/remove.png" class="remove" data-key="'. $key .'"/>
						  </li>';
				};*/
			} else {
				echo '<li class="not">
						<p class="empty">心愿单里暂无收藏</p>
						<p class="products">立即到精美作品集挑选您的\'French Lovers\'</p>
						<span><a href="'.Yii::app()->request->baseUrl .'/site/sac_femme">女士包袋</a></span>
						<span><a href="'.Yii::app()->request->baseUrl .'/site/sac_homme">男士包袋</a></span>
						<span><a href="'.Yii::app()->request->baseUrl .'/site/accesoires">精致配饰</a></span>
						<span><a href="'.Yii::app()->request->baseUrl .'/site/chaussures">女士鞋履</a></span>
					  </li>';
			}
		?>
		
	</ul>
        
</div>


<script>
	$( document ).ready(function() {
        $('.remove').click(function(){
        	var _this = $(this);
        	$.ajax({
            	url : 'removewishlist?keyproduct='+ $(this).attr("data-key"),  
            	type : 'GET',
              	success: function(data) {   
                	_this.parent().animate({height:0},200, function(){ _this.parent().remove(); checkwishlist(); });
                },
				error: function(xhr, status, error) { console.log('error' + xhr.responseText + status + error); }
        	});
        });

        function checkwishlist(){
        	var el = $('.wishlist ul').find('li');
        	if ( el.length == 0 ){
        		$('.wishlist ul').html('<li class="not" style="display:none"><p class="empty">心愿单里暂无收藏</p><p class="products">立即到精美作品集挑选您的\'French Lovers\'</p><span><a href="<?php echo Yii::app()->request->baseUrl;?>/site/sac_femme">女士包袋</a></span><span><a href="<?php echo Yii::app()->request->baseUrl;?>/site/sac_homme">男士包袋</a></span><span><a href="<?php echo Yii::app()->request->baseUrl;?>/site/accesoires">精致配饰</a></span><span><a href="<?php echo Yii::app()->request->baseUrl;?>/site/chaussures">女士鞋履</a></span></li>');
        		$('.not').fadeIn(300);
        	}

        }
    });

</script>








