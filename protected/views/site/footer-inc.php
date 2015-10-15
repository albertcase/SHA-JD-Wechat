    <div id="footer">
        <span class="footer-title">进入收藏</span>
    </div>
    <script type="text/javascript">
        $('#footer').click(function(){
            document.location.href="<?php echo Yii::app()->request->baseUrl; ?>/site/wishlist";       
        });
    </script>