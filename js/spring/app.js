

var dta;
var swiper;
var tmp;
$( document ).ready(function() {
    $.getJSON("../data/config.json", function(data){
        dta = data;
        if ( (categorie == "") && (produit == "") )
            displayWishView(false)
        else if ( (categorie != "" ) && (produit == "") )
            displayCategoryView(false);
        else
            displayProductView(false);
    });


});

function displayCategoryView(isFromClick){
    // affiche vue categorie
    $("#category").css('display','block');
    // remplir la vue categorie
    var cat = dta.categories[categorie];
    $("#category .top h1").html(cat.titre);
    $("#category .disclaimer").html(cat.description);
    var articles = dta.categories[categorie].articles;
    for (var b = 0; b < articles.length; b++) {
        $("#wrap-items").append('<div class="item-large" data-id-article='+b+'><img src="'+baseurl+articles[b].thumbnail+'" /><div class="title"><span class="line"></span><span class="span-title">'+articles[b].nom+'</span><span class="line"></span></div><div class="price">'+articles[b].prix+'</div><div class="info">'+articles[b].infos+'</div>')

    }
    // rendre interactif
    $(".item-large").click(function() {
        close();
        produit = $(this).attr("data-id-article");
        displayProductView(true);
    });
}

function displayWishView(isFromClick){
    // remplir la vue wishlist
    if ($.cookie('wishlist') != undefined) {
        var tmp = $.cookie('wishlist');
        var objectStringArray = (new Function("return [" + tmp + "];")());
        for (var i = 0; i < objectStringArray.length; i++) {
            $("#wishlist ul").append('<li><a href="'+baseurl+'/site/category?cat='+objectStringArray[i].categorie+'&prod='+objectStringArray[i].produit+'"><div class="img-wishlist"><img src="'+baseurl+dta.categories[objectStringArray[i].categorie].articles[objectStringArray[i].produit].thumbnail+'" /></div><div class=" text-wishlist"><p>'+dta.categories[objectStringArray[i].categorie].articles[objectStringArray[i].produit].nom+'</p><p>'+dta.categories[objectStringArray[i].categorie].articles[objectStringArray[i].produit].prix+'</p><p>'+dta.categories[objectStringArray[i].categorie].articles[objectStringArray[i].produit].infos+'</p></div></a><img src="'+baseurl+'/images/remove.png" class="remove" data-key="'+ i +'"/></li>');
        }
    }
    else{
        $("#wishlist ul").html('<li class="not"><p class="empty">心愿单里暂无收藏</p><p class="products">立即到精美作品集挑选您的\'French Lovers\'</p><span><a href="'+baseurl+'/site/category?cat=sacfemme">女士包袋</a></span><span><a href="'+baseurl+'/site/category?cat=sachomme">男士包袋</a></span><span><a href="'+baseurl+'category?cat=accesoires">精致配饰</a></span><span><a href="'+baseurl+'category?cat=chaussures">女士鞋履</a></span></li>')
    }
    // rendre la vue interactve

    //
    $('#wishlist').waitForImages({
        finished: function() {
            setTimeout(function(){
                $('#wishlist').css({ display: 'block'});
                if ( isFromClick )
                    open();
            },1500);
        },
    waitForAll: true
    });


    $('img.remove').click(function() {

        var key = $(this).attr('data-key');
        objectStringArray.splice(key,1);
        TweenMax.to( $(this).parent('li'), .4, {  height:0, ease:"Cubic.easeOut", onComplete:function(){ this.target.remove(); } });
        
        var backCookie = "";
        for (var i = 0; i < objectStringArray.length; i++) {
            if (i!=0) backCookie += ',';
            backCookie += '{categorie: "'+objectStringArray[i].categorie+'" , produit: "'+objectStringArray[i].produit+'"}';
        }
        $.cookie('wishlist' , [ backCookie ], { path: '/' } );

        if (objectStringArray.length == 0) {
            $.removeCookie('wishlist', { path: '/' });
            $("#wishlist ul").append('<li class="not" style="opacity:0"><p class="empty">心愿单里暂无收藏</p><p class="products">立即到精美作品集挑选您的\'French Lovers\'</p><span><a href="'+baseurl+'/site/category?cat=sacfemme">女士包袋</a></span><span><a href="'+baseurl+'/site/category?cat=sachomme">男士包袋</a></span><span><a href="'+baseurl+'category?cat=accesoires">精致配饰</a></span><span><a href="'+baseurl+'category?cat=chaussures">女士鞋履</a></span></li>');
            TweenMax.to( $("#wishlist ul li"), .4, {  delay:.45, opacity:1, ease:"Cubic.easeOut" });
        }
    });
    $('#wishlist .back').click(function() {
        close();

        setTimeout(function(){
            $('#category').css('display','none');
            $('#products').css('display','block');
            open();
        },2000);
    });

}

function displayProductView(isFromClick){
    // remplir la vue produit
    var slides =  dta.categories[categorie].articles[produit].slider;

    for (var i = 0; i < slides.length; i++)
        $('#products .swiper-wrapper').append('<div class="swiper-slide"><img src="'+baseurl+slides[i]+'" width="100%"/></div>');

    $('#products .title').html(dta.categories[categorie].articles[produit].nom);
    $('#products .price').html(dta.categories[categorie].articles[produit].prix);
    $('#products .info').html(dta.categories[categorie].articles[produit].infos);
    $('#products .text-bottom').html(dta.categories[categorie].articles[produit].description);
    $('#products .swiper-slide').waitForImages({
        finished: function() {
            setTimeout(function(){
                $("#products").css("display","block");
                swiper = new Swiper('.swiper-container', {
                    pagination: '.swiper-pagination',
                    preloadImages: false,
                    paginationClickable: true,
                    setWrapperSize: true,       
                });
                if ( isFromClick )
                    open();
            },2000);
        },
        waitForAll: true
    });
    // rendre interactif vue produit
    $('#products .btn-wishlist.off').click(function(){
        if ( !$(this).parent().hasClass("wait") && !$(this).parent().hasClass("on") ){
            $(this).parent().addClass("wait");

            TweenMax.to( $(this), .3, {  width:"0px",padding:"0", ease:"Cubic.easeOut" });
            setTimeout(function(){
                if ($.cookie('wishlist') != undefined) {
                    var tmp = $.cookie('wishlist');
                    tmp += ',{categorie: "'+categorie+'" , produit: "'+produit+'"}';
                    $.cookie('wishlist' , tmp, { path: '/' });
                } else
                    $.cookie('wishlist' , [ '{categorie: "'+categorie+'" , produit: "'+produit+'"}' ], { path: '/' } );

                $(this).parent().addClass("on");
                TweenMax.to( $('#products .btn-wishlist.wait'), .3, {  width:"0px",padding:"0", ease:"Cubic.easeOut" });
            }, 300);
        }
    });
    var mySound = new buzz.sound( baseurl+dta.categories[categorie].articles[produit].sound, {
        formats: [  "mp3" ]
    });
    $('#products .btsound').click(function(){       
        mySound.play()       
    });

    $('#products #footer .footer-title').click(function(){
        close();
        displayWishView(true);
    });

    $('#products .back').click(function() {
        close();

        setTimeout(function(){
            displayCategoryView(false);
            $('#products').css('display','none');
            swiper.destroy(true, true);
            $('#products .swiper-wrapper').html("");
            open();
        },2000);
    });
}

function close() {
    //FERMETURE HAUT
    TweenMax.to($("#top-transition"),.4,{rotation:0, left:0, top:1, ease:"Quart.easeOut"});
    //FERMETURE BAS ET AFFICHAGE DU FOND BLANC
    TweenMax.to($("#bottom-transition"),.4,{rotation:0, right:0, bottom:0, ease:"Quart.easeOut",onComplete:function(){
        $("#background-transition").css({display:"block"})
        $("#category, #products, #wishlist").css({display:"none"})
    }});
    //REDUCTION DE LA BORDURE ET AFFICHAGE DU LOGO
    TweenMax.to($("#top-transition, #bottom-transition"),.4,{delay:.5,width:0,left:"100%",ease:"Quart.easeOut",onComplete:function(){ TweenMax.to($("#logo"),.6,{opacity:1}) } });
    
}

function open() {
    console.log("open")
    //DISPARITION DU LOGO ET REAFFICHAGE DE LA BORDURE
    TweenMax.to($("#top-transition, #bottom-transition"),0,{ rotation:0,left:"-10%" });
    TweenMax.to($("#logo"),.6,{opacity:0} );
    TweenMax.to($("#top-transition, #bottom-transition"), .6 , { delay:.5, width:"150%", onComplete:function(){ $("#background-transition").css("display","none"); } });
    //OUVERTURE HAUT ET BAS
    TweenMax.to($("#top-transition"),.6,{delay:1,top:"-100%", left:"70%", rotation:45, ease:"Quart.easeIn"});
    TweenMax.to($("#bottom-transition"),.6,{delay:1,bottom:"-100%",left:"-70%", rotation:45, ease:"Quart.easeIn" , onComplete:function(){
        $("#top-transition, #bottom-transition, #background-transition").remove()
        $("body").append('<div id="top-transition"></div><div id="bottom-transition"></div><div id="background-transition"><img src="'+baseurl+'/images/logo.png" id="logo"/></div>')
    }});
}
























