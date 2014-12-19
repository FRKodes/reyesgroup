!function(e,a,t){a.fn.validate=function(e){return this.each(function(){var n=a(this);if(t===n.data("validate")){var r=new a.validate(e,n);n.data("validate",r)}})},a.validate=function(e,n){function r(e,t){return-1==a.inArray(e,t)&&t.push(e),t}function c(e){return e=e.slice(e.indexOf("[")+1,-1),-1!==e.indexOf(",")?e.split(","):[e]}function i(e){for(var a=[],t=0;t<e.length;t++){var n=e[t],r=[],i=n.indexOf("[");-1!==i&&(r=r.concat(c(n)),n=n.slice(0,i)),a.push({rule:n,args:r})}return a}var l=a.extend(!0,{debug:!1,autoDetect:!1,visibleOnly:!0,beforeSubmit:function(){},singleError:function(){},overallError:function(){},singleSuccess:function(){},overallSuccess:function(){},regExp:{alpha:/^[a-zA-Z]*$/,numeric:/^[0-9]*$/,alphanumeric:/^[a-zA-Z0-9]*$/,url:/^(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?$/,email:/^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9\-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/}},e),o=this,s=["checkGroupRequired","checkGroupMin","checkGroupMax"];o.$form=n,o.version="1.0.0",n!==t&&n.on("submit",function(e){(!o.validate()||l.debug)&&(e.stopImmediatePropagation(),e.preventDefault())}),o.validate=function(e){e="undefined"==typeof e?o.$form:e;var t=!1,n=a();return l.beforeSubmit.call(o),o.fieldsToCheck(e).each(function(){var e=a(this);(l.visibleOnly&&e.is(":visible")||!l.visibleOnly)&&!o.checkField(e)&&(t=!0,n=n.add(e))}),t?l.overallError.call(o,e,n):!1===l.overallSuccess.call(o,e)&&(t=!0),!t},o.checkField=function(e){var a=e.data("validate")?e.data("validate").split("|"):[];e.val();var t=[];if(l.autoDetect&&e.is('input:not([type="checkbox"], [type="radio"])')&&"text"!=e.attr("type"))switch(t=e.attr("type")){case"number":a=r("numeric",a);break;default:a=r(t,a)}return a=i(a),t=o.checkValue(e,a),t instanceof Object?(l.singleError.call(o,e,t),!1):(l.singleSuccess.call(o,e,a),!0)},o.checkValue=function(e,t){if(!t)return!0;t="string"==typeof t?i(t):t;for(var n=[],r=0;r<t.length;r++){var c=t[r].rule,u="",d=[e].concat(t[r].args.slice());c.indexOf("["),u="check"+c.charAt(0).toUpperCase()+c.slice(1),"checkRequired"==u&&e.is('input[type="checkbox"]')?u="checkRequiredCheckbox":-1!=a.inArray(u,s)&&(c=a('input[type="checkbox"]',e),c.length||(c=a('input[type="radio"]',e)),d=[c].concat(d.slice(1))),o[u]instanceof Function?o[u].apply(o,d)||n.push(t[r]):l.regExp[t[r].rule]?""!==e.val()&&!o.checkRegExp(e,t[r].rule)&&n.push(t[r]):n.push(t[r])}return 0<n.length?n:!0},o.fieldsToCheck=function(e){return e=a("[data-validate]",e===t?o.$form:e),l.autoDetect&&(e=a("input[required]").add(e)),e},o.checkRequired=function(e){return 0<e.val().length?!0:!1},o.checkRequiredCheckbox=function(e){return e.is(":checked")},o.checkGroupRequired=function(e){return e.filter(":checked").length?!0:!1},o.checkGroupMin=function(e,a){return e.filter(":checked").length>=a},o.checkGroupMax=function(e,a){return e.filter(":checked").length<=a},o.checkCustomRegExp=function(e,a,t){return""===e.val()?!0:(a=RegExp(a,t),e.val().match(a)?!0:!1)},o.checkRegExp=function(e,a){return e.val().match(l.regExp[a])?!0:!1},o.checkMaxLength=function(e,a){return""===e.val()?!0:e.val().length<=a},o.checkMinLength=function(e,a){return""===e.val()?!0:e.val().length>=a},o.checkMax=function(e,a){return""===e.val()?!0:parseFloat(e.val())<=parseFloat(a)},o.checkMin=function(e,a){return""===e.val()?!0:parseFloat(e.val())>=parseFloat(a)}}}(window,jQuery),$(document).ready(function(){if($(window).scroll(function(){$(this).scrollTop()>100?($("header").addClass("transparency"),$(".logo-reyes-top").css("opacity","0"),$(".navbar-brand").css("display","block")):($("header").removeClass("transparency"),$(".logo-reyes-top").css("opacity","1"),$(".navbar-brand").css("display","none"))}),$(".unidades-list li a").on("click",function(){console.log($(this).attr("class"));var e=$(this).attr("class");$(".unidad").hide(),$(".unidad."+e).show()}),$(".platillos .steps li a").on("click",function(){console.log($(this).attr("class"));var e=$(this).attr("class");$(".platillos .photos li").css("display","none").removeClass("show"),$(".platillos .photos li."+e).show()}),$(".navbar-toggle").on("click",function(){$("header").addClass("transparency")}),$(".navbar-nav li a").on("click",function(){var e=$(this).attr("href").split("#"),a=e[1];$(".navbar-nav li a").removeClass("active"),$(this).addClass("active"),$("html, body").animate({scrollTop:$("#"+a).offset().top},500)}),$("#myCarousel").carousel(),$(window).width()>=1e3&&($("#carousel_food").carousel({interval:5050}),$("#carousel_beberages").carousel({interval:5100}),$("#carousel_musica").carousel({interval:5150})),$(function(){{var e={singleError:function(e){e.closest(".line").removeClass("valid").addClass("error")},singleSuccess:function(e){e.closest(".line").removeClass("error").addClass("valid")},overallSuccess:function(){var e=$("#contactForm"),a=e.find("input[name='nombre']").val(),t=e.find("input[name='email']").val(),n=e.find("textarea[name='mensaje']").val(),r=e.attr("action"),c=r,i=$.post(c,{n:a,e:t,m:n});i.done(function(e){console.log(e),$("#contactForm")[0].reset(),$(".sent_mail_alert").fadeIn().delay(2e3).fadeOut()})},overallError:function(){},autoDetect:!0,debug:!0};$("#contactForm").validate(e).data("validate")}}),$(window).width()>=1280){skrollr.init({render:function(){},forceHeight:!1})}});