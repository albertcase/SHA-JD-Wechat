<div class="store">
    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" width="100%" class="logo"/>
    
    <div class="store_all">
        <p>地址：<span><?php echo $store['address']?></span></p>
        <p>营业时间：<span><?php echo $store['open']?></span></p>
        <p>电话：<span><?php echo $store['telphone']?></span></p>
        <img src="<?php echo $store['mapUrl']; ?>" width="100%" class="store_map"/>
    </div>    
</div>  