window.getComputedStyle||(window.getComputedStyle=function(t){return this.el=t,this.getPropertyValue=function(e){var a=/(\-([a-z]){1})/g;return"float"==e&&(e="styleFloat"),a.test(e)&&(e=e.replace(a,function(){return arguments[2].toUpperCase()})),t.currentStyle[e]?t.currentStyle[e]:null},this}),jQuery(document).ready(function(t){function e(){t(".inner-intro").delay(200).animate({"margin-top":"200px"},"slow","swing",function(){t(".image-wrap").delay(750).fadeOut(500,"linear"),t(".title-wrap").delay(1250).fadeIn(500,"linear")})}t(window).load(function(){t("#status").fadeOut(300),t("#preloader").delay(350).fadeOut(300,function(){"function"==typeof e&&e()})}),t(function(){window.PIE&&t(".ie-lameness").each(function(){PIE.attach(this)})}),Modernizr.input.placeholder||(t("[placeholder]").focus(function(){var e=t(this);e.val()==e.attr("placeholder")&&(e.val(""),e.removeClass("placeholder"))}).blur(function(){var e=t(this);(""==e.val()||e.val()==e.attr("placeholder"))&&(e.addClass("placeholder"),e.val(e.attr("placeholder")))}).blur(),t("[placeholder]").parents("form").submit(function(){t(this).find("[placeholder]").each(function(){var e=t(this);e.val()==e.attr("placeholder")&&e.val("")})})),t(".nav li a").click(function(e){e.preventDefault();var n=t(this).parent().attr("class").split(" ")[0];if("mic-home"==n)return t("body, html").animate({scrollTop:0},"slow","swing"),!1;var i="";481>=a&&(i=t("#"+n).offset().top-150),a>481&&768>=a&&(i=t("#"+n).offset().top-200),a>768&&(i=t("#"+n).offset().top-300),t("body, html").animate({scrollTop:i},"slow","swing")});var a=t(window).width();if(768>a){var n=t(".header .nav"),i=n.height();n.addClass("close").css({height:0,opacity:0});var o=t("#menu-main-nav");o.hide();var r={show_header_menu:function(){n.hasClass("close")?(o.show(),n.removeClass("close"),n.addClass("open").animate({height:i+"px",opacity:1})):n.hasClass("open")&&(n.removeClass("open"),n.addClass("close").animate({height:0,opacity:0}),o.hide())}};window.mic=r}if(a>=768){t(".header .nav ul li .animate span").css({width:0}),t(".header .nav ul li").hover(function(){t(".animate span",this).stop().animate({width:"100%"},300,"swing")},function(){t(".animate span",this).stop().animate({width:0},100,"swing")});var s=t(".header");s.height(),s.css({"margin-top":"-103px",opacity:0}),t(window).scroll(function(){var e=t(window).scrollTop();s.stop(),e>=200&&s.animate({opacity:1,"margin-top":0},"slow","swing"),200>e&&s.animate({"margin-top":"-103px",opacity:0},"fast","swing")}),t(".title-wrap").hide(),t(".image-wrap").show(),t(".inner-intro").css("margin-top","-450px"),t(".down-arrow").click(function(){var e=t("#antigua").offset().top-300;t("body,html").animate({scrollTop:e},"slow","swing")}),t(".comment img[data-gravatar]").each(function(){t(this).attr("src",t(this).attr("data-gravatar"))})}

	

	t('li.gaming').click(function(){

		t('.icon.gaming img').removeClass().addClass(' pulse animated')
			var wait = window.setTimeout( function(){
			t('.icon.gaming img').removeClass()},
			1300
		)
	})

	t('li.dining').click(function(){

		t('.icon.dining img').removeClass().addClass(' pulse animated')
			var wait = window.setTimeout( function(){
			t('.icon.dining img').removeClass()},
			1300
		)
	})

	t('li.sports').click(function(){

		t('.icon.sports img').removeClass().addClass(' pulse animated')
			var wait = window.setTimeout( function(){
			t('.icon.sports img').removeClass()},
			1300
		)
	})
	

}),

function(t){function e(){c.setAttribute("content",d),p=!0}function a(){c.setAttribute("content",u),p=!1}function n(n){l=n.accelerationIncludingGravity,o=Math.abs(l.x),r=Math.abs(l.y),s=Math.abs(l.z),!t.orientation&&(o>7||(s>6&&8>r||8>s&&r>6)&&o>5)?p&&a():p||e()}if(/iPhone|iPad|iPod/.test(navigator.platform)&&navigator.userAgent.indexOf("AppleWebKit")>-1){var i=t.document;if(i.querySelector){var o,r,s,l,c=i.querySelector("meta[name=viewport]"),h=c&&c.getAttribute("content"),u=h+",maximum-scale=1",d=h+",maximum-scale=10",p=!0;c&&(t.addEventListener("orientationchange",e,!1),t.addEventListener("devicemotion",n,!1))}}}(this);