!function(e,a,n){a.fn.validate=function(e){return this.each(function(){var i=a(this);if(n===i.data("validate")){var t=new a.validate(e,i);i.data("validate",t)}})},a.validate=function(e,i){function t(e,n){return-1==a.inArray(e,n)&&n.push(e),n}function c(e){return e=e.slice(e.indexOf("[")+1,-1),-1!==e.indexOf(",")?e.split(","):[e]}function o(e){for(var a=[],n=0;n<e.length;n++){var i=e[n],t=[],o=i.indexOf("[");-1!==o&&(t=t.concat(c(i)),i=i.slice(0,o)),a.push({rule:i,args:t})}return a}var l=a.extend(!0,{debug:!1,autoDetect:!1,visibleOnly:!0,beforeSubmit:function(){},singleError:function(){},overallError:function(){},singleSuccess:function(){},overallSuccess:function(){},regExp:{alpha:/^[a-zA-Z]*$/,numeric:/^[0-9]*$/,alphanumeric:/^[a-zA-Z0-9]*$/,url:/^(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?$/,email:/^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9\-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/}},e),r=this,s=["checkGroupRequired","checkGroupMin","checkGroupMax"];r.$form=i,r.version="1.0.0",i!==n&&i.on("submit",function(e){(!r.validate()||l.debug)&&(e.stopImmediatePropagation(),e.preventDefault())}),r.validate=function(e){e="undefined"==typeof e?r.$form:e;var n=!1,i=a();return l.beforeSubmit.call(r),r.fieldsToCheck(e).each(function(){var e=a(this);(l.visibleOnly&&e.is(":visible")||!l.visibleOnly)&&!r.checkField(e)&&(n=!0,i=i.add(e))}),n?l.overallError.call(r,e,i):!1===l.overallSuccess.call(r,e)&&(n=!0),!n},r.checkField=function(e){var a=e.data("validate")?e.data("validate").split("|"):[];e.val();var n=[];if(l.autoDetect&&e.is('input:not([type="checkbox"], [type="radio"])')&&"text"!=e.attr("type"))switch(n=e.attr("type")){case"number":a=t("numeric",a);break;default:a=t(n,a)}return a=o(a),n=r.checkValue(e,a),n instanceof Object?(l.singleError.call(r,e,n),!1):(l.singleSuccess.call(r,e,a),!0)},r.checkValue=function(e,n){if(!n)return!0;n="string"==typeof n?o(n):n;for(var i=[],t=0;t<n.length;t++){var c=n[t].rule,u="",d=[e].concat(n[t].args.slice());c.indexOf("["),u="check"+c.charAt(0).toUpperCase()+c.slice(1),"checkRequired"==u&&e.is('input[type="checkbox"]')?u="checkRequiredCheckbox":-1!=a.inArray(u,s)&&(c=a('input[type="checkbox"]',e),c.length||(c=a('input[type="radio"]',e)),d=[c].concat(d.slice(1))),r[u]instanceof Function?r[u].apply(r,d)||i.push(n[t]):l.regExp[n[t].rule]?""!==e.val()&&!r.checkRegExp(e,n[t].rule)&&i.push(n[t]):i.push(n[t])}return 0<i.length?i:!0},r.fieldsToCheck=function(e){return e=a("[data-validate]",e===n?r.$form:e),l.autoDetect&&(e=a("input[required]").add(e)),e},r.checkRequired=function(e){return 0<e.val().length?!0:!1},r.checkRequiredCheckbox=function(e){return e.is(":checked")},r.checkGroupRequired=function(e){return e.filter(":checked").length?!0:!1},r.checkGroupMin=function(e,a){return e.filter(":checked").length>=a},r.checkGroupMax=function(e,a){return e.filter(":checked").length<=a},r.checkCustomRegExp=function(e,a,n){return""===e.val()?!0:(a=RegExp(a,n),e.val().match(a)?!0:!1)},r.checkRegExp=function(e,a){return e.val().match(l.regExp[a])?!0:!1},r.checkMaxLength=function(e,a){return""===e.val()?!0:e.val().length<=a},r.checkMinLength=function(e,a){return""===e.val()?!0:e.val().length>=a},r.checkMax=function(e,a){return""===e.val()?!0:parseFloat(e.val())<=parseFloat(a)},r.checkMin=function(e,a){return""===e.val()?!0:parseFloat(e.val())>=parseFloat(a)}}}(window,jQuery),$(document).ready(function(){if($(window).scroll(function(){$(this).scrollTop()>25?($("header").addClass("transparency"),$(".logo-reyes-top").css("opacity","0"),$(".navbar-brand").css("display","block")):($("header").removeClass("transparency"),$(".logo-reyes-top").css("opacity","1"),$(".navbar-brand").css("display","none"))}),$(".unidades-list li a").on("click",function(){console.log($(this).attr("class"));var e=$(this).attr("class");$(".unidad").hide(),$(".unidad."+e).show()}),$(".platillos .steps li a").on("click",function(){console.log($(this).attr("class"));var e=$(this).attr("class");$(".platillos .photos li").css("display","none").removeClass("show"),$(".platillos .photos li."+e).show()}),$(".navbar-toggle").on("click",function(){$("header").addClass("transparency")}),$(".navbar-nav li a").on("click",function(){var e=$(this).attr("href").split("#"),a=e[1];$(".navbar-nav li a").removeClass("active"),$(this).addClass("active"),$("html, body").animate({scrollTop:$("#"+a).offset().top},500)}),$("#myCarousel").carousel(),$("#carouselcontainer").carousel(),$(window).width()>=1e3&&($("#carousel_food").carousel({interval:5050}),$("#carousel_beberages").carousel({interval:5100}),$("#carousel_musica").carousel({interval:5150})),$(function(){{var e={singleError:function(e){e.closest(".line").removeClass("valid").addClass("error")},singleSuccess:function(e){e.closest(".line").removeClass("error").addClass("valid")},overallSuccess:function(){var e=$("#contactForm"),a=e.find("input[name='nombre']").val(),n=e.find("input[name='email']").val(),i=e.find("textarea[name='mensaje']").val(),t=e.attr("action"),c=t,o=$.post(c,{n:a,e:n,m:i});o.done(function(e){console.log(e),$("#contactForm")[0].reset(),$(".sent_mail_alert").fadeIn().delay(2e3).fadeOut()})},overallError:function(){},autoDetect:!0,debug:!0};$("#contactForm").validate(e).data("validate")}}),$(function(){{var e={singleError:function(e){e.closest(".line").removeClass("valid").addClass("error")},singleSuccess:function(e){e.closest(".line").removeClass("error").addClass("valid")},overallSuccess:function(){var e=$("#franquicias"),a=e.attr("action"),n=e.find("input[name='nombre']").val(),i=e.find("input[name='apellidos']").val(),t=e.find("input[name='email']").val(),c=e.find("input[name='tel']").val(),o=e.find("input[name='cel']").val(),l=e.find("input[name='ciudad']").val(),r=e.find("select[name='local']").val(),s=e.find("input[name='ubicacion_local']").val(),u=e.find("input[name='porque_interes']").val(),d=e.find("input[name='pertenece_franquicia']").val(),p=e.find("input[name='actividad_economica']").val(),v=e.find("select[name='negocio_propio']").val(),f=e.find("input[name='cual_negocio']").val(),h=e.find("input[name='quien_opera']").val(),m=e.find("select[name='origen_inversion']").val(),g=e.find("input[name='cantidad_inversion']").val(),k=e.find("select[name='compromiso_franquicia']").val(),b=e.find("input[name='porque_compromiso']").val(),_=a,y=$.post(_,{nombre:n,apellidos:i,email:t,tel:c,cel:o,ciudad:l,local:r,ubicacion_local:s,porque_interes:u,pertenece_franquicia:d,actividad_economica:p,negocio_propio:v,cual_negocio:f,quien_opera:h,origen_inversion:m,cantidad_inversion:g,compromiso_franquicia:k,porque_compromiso:b});y.done(function(e){console.log(e),$("#franquicias")[0].reset(),$(".sent_mail_alert").fadeIn().delay(2e3).fadeOut()})},overallError:function(){},autoDetect:!0,debug:!0};$("#franquicias").validate(e).data("validate")}}),$('select[name="local"]').on("change",function(){$('input[name="ubicacion_local"]').css("display","none").val(""),""!==$(this).val()&&"ninguno"!==$(this).val()&&$('input[name="ubicacion_local"]').css("display","block")}),$('select[name="negocio_propio"]').on("change",function(){$('input[name="cual_negocio"]').css("display","none").val(""),""!==$(this).val()&&"no"!==$(this).val()&&$('input[name="cual_negocio"]').css("display","block")}),$('select[name="compromiso_franquicia"]').on("change",function(){$('input[name="porque_compromiso"]').css("display","none").val(""),""!==$(this).val()&&"no"!==$(this).val()&&$('input[name="porque_compromiso"]').css("display","block")}),$(window).width()>=1280){skrollr.init({render:function(){},forceHeight:!1})}});