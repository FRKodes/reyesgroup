/*-------------------------------
    VALIDATE.JS
    A barebones jQuery validation plugin
    @author Todd Francis
    @version 1.0.3
-------------------------------*/
;(function(r,d,l){d.fn.validate=function(m){return this.each(function(){var f=d(this);if(l===f.data("validate")){var j=new d.validate(m,f);f.data("validate",j)}})};d.validate=function(m,f){function j(a,b){-1==d.inArray(a,b)&&b.push(a);return b}function p(a){a=a.slice(a.indexOf("[")+1,-1);return-1!==a.indexOf(",")?a.split(","):[a]}function n(a){for(var b=[],c=0;c<a.length;c++){var g=a[c],d=[],h=g.indexOf("[");-1!==h&&(d=d.concat(p(g)),g=g.slice(0,h));b.push({rule:g,args:d})}return b}var h=d.extend(!0,
{debug:!1,autoDetect:!1,visibleOnly:!0,beforeSubmit:function(){},singleError:function(){},overallError:function(){},singleSuccess:function(){},overallSuccess:function(){},regExp:{alpha:/^[a-zA-Z]*$/,numeric:/^[0-9]*$/,alphanumeric:/^[a-zA-Z0-9]*$/,url:/^(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?$/,email:/^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9\-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/}},
m),c=this,q=["checkGroupRequired","checkGroupMin","checkGroupMax"];c.$form=f;c.version="1.0.0";if(f!==l)f.on("submit",function(a){if(!c.validate()||h.debug)a.stopImmediatePropagation(),a.preventDefault()});c.validate=function(a){a="undefined"===typeof a?c.$form:a;var b=!1,e=d();h.beforeSubmit.call(c);c.fieldsToCheck(a).each(function(){var a=d(this);if((h.visibleOnly&&a.is(":visible")||!h.visibleOnly)&&!c.checkField(a))b=!0,e=e.add(a)});b?h.overallError.call(c,a,e):!1===h.overallSuccess.call(c,a)&&
(b=!0);return!b};c.checkField=function(a){var b=a.data("validate")?a.data("validate").split("|"):[];a.val();var e=[];if(h.autoDetect&&a.is('input:not([type="checkbox"], [type="radio"])')&&"text"!=a.attr("type"))switch(e=a.attr("type"),e){case "number":b=j("numeric",b);break;default:b=j(e,b)}b=n(b);e=c.checkValue(a,b);if(e instanceof Object)return h.singleError.call(c,a,e),!1;h.singleSuccess.call(c,a,b);return!0};c.checkValue=function(a,b){if(!b)return!0;b="string"==typeof b?n(b):b;for(var e=[],g=
0;g<b.length;g++){var f=b[g].rule,k="",j=[a].concat(b[g].args.slice());f.indexOf("[");k="check"+f.charAt(0).toUpperCase()+f.slice(1);"checkRequired"==k&&a.is('input[type="checkbox"]')?k="checkRequiredCheckbox":-1!=d.inArray(k,q)&&(f=d('input[type="checkbox"]',a),f.length||(f=d('input[type="radio"]',a)),j=[f].concat(j.slice(1)));c[k]instanceof Function?c[k].apply(c,j)||e.push(b[g]):h.regExp[b[g].rule]?""!==a.val()&&!c.checkRegExp(a,b[g].rule)&&e.push(b[g]):e.push(b[g])}return 0<e.length?e:!0};c.fieldsToCheck=
function(a){a=d("[data-validate]",a===l?c.$form:a);h.autoDetect&&(a=d("input[required]").add(a));return a};c.checkRequired=function(a){return 0<a.val().length?!0:!1};c.checkRequiredCheckbox=function(a){return a.is(":checked")};c.checkGroupRequired=function(a){return a.filter(":checked").length?!0:!1};c.checkGroupMin=function(a,b){return a.filter(":checked").length>=b};c.checkGroupMax=function(a,b){return a.filter(":checked").length<=b};c.checkCustomRegExp=function(a,b,c){if(""===a.val())return!0;
b=RegExp(b,c);return a.val().match(b)?!0:!1};c.checkRegExp=function(a,b){return a.val().match(h.regExp[b])?!0:!1};c.checkMaxLength=function(a,b){return""===a.val()?!0:a.val().length<=b};c.checkMinLength=function(a,b){return""===a.val()?!0:a.val().length>=b};c.checkMax=function(a,b){return""===a.val()?!0:parseFloat(a.val())<=parseFloat(b)};c.checkMin=function(a,b){return""===a.val()?!0:parseFloat(a.val())>=parseFloat(b)}}})(window,jQuery);

$( document ).ready(function() {
    /*sticky header*/
    $(window).scroll(function() {
        if ($(this).scrollTop() > 25){
            $('header').addClass("transparency");
            $('.logo-reyes-top').css("opacity","0");
            $('.navbar-brand').css("display","block");
        }else{ 
            $('header').removeClass("transparency");
            $('.logo-reyes-top').css("opacity","1");
            $('.navbar-brand').css("display","none");
        }
    });
    /*unidades script*/
    $('.unidades-list li a').on('click', function(){
        console.log($(this).attr('class'));
        var idUnidad = $(this).attr('class');
        $('.unidad').hide();
        $('.unidad.' + idUnidad).show();
    });
    $('.platillos .steps li a').on('click', function(){
        console.log($(this).attr('class'));
        var idUnidad = $(this).attr('class');
        $('.platillos .photos li').css('display', 'none').removeClass('show');
        $('.platillos .photos li.' + idUnidad).show();
    });
    /*transparent background*/
    $('.navbar-toggle').on('click',function(){
        $('header').addClass("transparency");
    });
    /*anchors links*/
    $(".navbar-nav li a").on('click', function() {
        var slice = $(this).attr('href').split('#')
        var anchor = slice[1];
        $(".navbar-nav li a").removeClass('active');
        $(this).addClass('active');
        $('html, body').animate({
            scrollTop: $("#"+anchor).offset().top
        }, 500);
    });    
    /*Carousel*/
    $('#myCarousel').carousel();
    
    if ($( window ).width() >= 1000){
        $('#carousel_food').carousel({ interval: 5050 });
        $('#carousel_beberages').carousel({ interval: 5100 });
        $('#carousel_musica').carousel({ interval: 5150 });
    }
    /*validator*/
    $(function(){
        var formSettings = {
            singleError : function($field, rules){ $field.closest('.line').removeClass('valid').addClass('error');},
            singleSuccess : function($field, rules){ $field.closest('.line').removeClass('error').addClass('valid'); },
            overallSuccess : function(){
                var form    = $('#contactForm'),
                    name    = form.find( "input[name='nombre']" ).val(),
                    email   = form.find( "input[name='email']" ).val(),
                    message = form.find( "textarea[name='mensaje']" ).val(),
                    action  = form.attr( "action"),
                    url     = action;
                var posting = $.post( 
                    url, { n: name, e: email, m: message }
                    );
                posting.done(function( data ) {
                    console.log(data);
                    $('#contactForm')[0].reset();
                    $('.sent_mail_alert').fadeIn().delay(2000).fadeOut();
                });
            },
            overallError : function($form, fields){ /*Do nothing, just show the error fields*/ },
            autoDetect : true, debug : true
        };
        var $validate = $('#contactForm').validate(formSettings).data('validate');
    });

    
    $(function(){
        var formSettingsFranquicia = {
            singleError : function($field, rules){ $field.closest('.line').removeClass('valid').addClass('error'); },
            singleSuccess : function($field, rules){ $field.closest('.line').removeClass('error').addClass('valid'); },
            overallSuccess : function(){
                var form    = $('#franquicias'),
                    name    = form.find( "input[name='nombre']" ).val(),
                    apellidos = form.find( "input[name='apellidos']" ).val(),
                    email   = form.find( "input[name='email']" ).val(),
                    action  = form.attr( "action"),
                    url     = action;
                var posting = $.post( url );
                posting.done(function( data ) {
                    console.log(data);
                    $('#franquicias')[0].reset();
                    $('.sent_mail_alert').fadeIn().delay(4000).fadeOut();
                });
            },
            overallError : function($form, fields){ /*Do nothing, just show the error fields*/ },
            autoDetect : true, debug : true
        };
        var $validate = $('#franquicias').validate(formSettingsFranquicia).data('validate');
    });
    
    $('select[name="local"]').on('change', function(){
        $('input[name="ubicacion_local"]').css('display','none').val('');
        if ($(this).val() !== '' && $(this).val() !== 'ninguno') {
            $('input[name="ubicacion_local"]').css('display','block');
        };
    });

    $('select[name="negocio_propio"]').on('change', function(){
        $('input[name="cual_negocio"]').css('display','none').val('');
        if ($(this).val() !== '' && $(this).val() !== 'no') {
            $('input[name="cual_negocio"]').css('display','block');
        };
    });

    $('select[name="compromiso_franquicia"]').on('change', function(){
        $('input[name="porque_compromiso"]').css('display','none').val('');
        if ($(this).val() !== '' && $(this).val() !== 'no') {
            $('input[name="porque_compromiso"]').css('display','block');
        };
    });
    
    if ($( window ).width() >= 1280) {
        // Init Skrollr
        var s = skrollr.init({
            render: function(data) {
                //Debugging - Log the current scroll position.
                // console.log(data.curTop);
            },
            forceHeight: false
        });
    };
});