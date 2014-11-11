$( document ).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100){
            $('header').addClass("transparency");
            $('.logo-reyes-top').css("opacity","0");
            $('.navbar-brand').css("display","block");
        }else{ 
            $('header').removeClass("transparency");
            $('.logo-reyes-top').css("opacity","1");
            $('.navbar-brand').css("display","none");
        }
    });
    $('.unidades-list li a').on('click', function(){
        var idUnidad = $(this).attr('class');
        $('.unidad').hide();
        $('.unidad.' + idUnidad).show();
        console.log($(this).attr('class'));
    });
    
    $('.navbar-toggle').on('click',function(){
        console.log('ok');
        $('header').addClass("transparency");
    });
    
});