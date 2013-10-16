/*
Bones Scripts File
Author: Eddie Machado

This file should contain any js scripts you want to add to the site.
Instead of calling it in the header or throwing it inside wp_head()
this file will be called automatically in the footer so as not to
slow the page load.

*/

// IE8 ployfill for GetComputed Style (for Responsive Script below)
if (!window.getComputedStyle) {
    window.getComputedStyle = function(el, pseudo) {
        this.el = el;
        this.getPropertyValue = function(prop) {
            var re = /(\-([a-z]){1})/g;
            if (prop == 'float') prop = 'styleFloat';
            if (re.test(prop)) {
                prop = prop.replace(re, function () {
                    return arguments[2].toUpperCase();
                });
            }
            return el.currentStyle[prop] ? el.currentStyle[prop] : null;
        }
        return this;
    }
}



// as the page loads, call these scripts
jQuery(document).ready(function($) {

    //preloader
    $(window).load(function() { 
        $("#status").fadeOut(300); 
        $("#preloader").delay(350).fadeOut(300, function() {
            if (typeof mic_intro == 'function') { 
              mic_intro(); 
            }
        });
    });

    
    //attach PIE to ie lameness
    $(function() {
        if (window.PIE) {
            $('.ie-lameness').each(function() {
                PIE.attach(this);
            });
        }
    });

    //placeholder text for ie lameness
    if(!Modernizr.input.placeholder){

        $('[placeholder]').focus(function() {
          var input = $(this);
          if (input.val() == input.attr('placeholder')) {
            input.val('');
            input.removeClass('placeholder');
          }
        }).blur(function() {
          var input = $(this);
          if (input.val() == '' || input.val() == input.attr('placeholder')) {
            input.addClass('placeholder');
            input.val(input.attr('placeholder'));
          }
        }).blur();
        $('[placeholder]').parents('form').submit(function() {
          $(this).find('[placeholder]').each(function() {
            var input = $(this);
            if (input.val() == input.attr('placeholder')) {
              input.val('');
            }
          })
        });
    }

    //navigation 
    $('.nav li a').click( function(e) {
        e.preventDefault();

        //get first class of menu item
        var mic_menu_item = $(this).parent().attr('class').split(' ')[0];
        
        if(mic_menu_item == 'mic-home') {
            $('body, html').animate({scrollTop:0}, 'slow', 'swing');
            return false;
        }
        
        //scroll to the id depending on the viewport size
        var mic_scroll_to = '';
        if (responsive_viewport <= 481) {
            mic_scroll_to = $('#'+mic_menu_item).offset().top - 150;
        }

        if (responsive_viewport > 481 && responsive_viewport <= 768) {
            mic_scroll_to = $('#'+mic_menu_item).offset().top - 200;
        }

        if (responsive_viewport > 768) {
            mic_scroll_to = $('#'+mic_menu_item).offset().top - 300;
        }

        $('body, html').animate({scrollTop:mic_scroll_to}, 'slow', 'swing');

    });


    /*
    Responsive jQuery is a tricky thing.
    There's a bunch of different ways to handle
    it, so be sure to research and find the one
    that works for you best.
    */
    
    /* getting viewport width */
    var responsive_viewport = $(window).width();
    
    /* if is below 481px */
    if (responsive_viewport < 481) {

       
    } /* end smallest screen */
    
    /* if is larger than 481px */
    if (responsive_viewport > 481) {
        /*
        $('.down-arrow', '#top-section').click(function() {
            var mic_scroll_to = $('#antigua').offset().top - 300;
            $('body,html').animate({scrollTop:mic_scroll_to}, 'slow', 'swing');
        });
*/
        
    } /* end larger than 481px */

    if (responsive_viewport < 768) {

        //mobile menu display hide the menu with 
        var header_nav = $('.header .nav');
        var orig_height = header_nav.height();
        header_nav.addClass('close').css( {'height':0,'opacity':0});
        var mic_main_menu = $('#menu-main-nav');
        mic_main_menu.hide();

        var mic = {
            show_header_menu: function() {
                if ( header_nav.hasClass('close') ) {
                    mic_main_menu.show();
                    header_nav.removeClass('close');
                    header_nav.addClass('open').animate( {'height': orig_height+'px', 'opacity':1} );
                } else if ( header_nav.hasClass('open') ) {
                    header_nav.removeClass('open');
                    header_nav.addClass('close').animate( {'height': 0, 'opacity':0} );
                    mic_main_menu.hide();
                }
            }
        };

        window.mic = mic;
    }
    
    /* if is above or equal to 768px */
    if (responsive_viewport >= 768) {

        //hover animation for main navigation
        $('.header .nav ul li .animate span').css({'width':0});
        $('.header .nav ul li').hover(function() {
               $('.animate span', this).stop().animate({'width':'100%'}, 300, 'swing');
            },
            function() {
                $('.animate span', this).stop().animate({'width':0}, 100, 'swing');
            });

        //magic header
        var mic_header = $('.header');
        var orig_header_height = mic_header.height();
        mic_header.css({'margin-top':'-103px','opacity':0});

        $(window).scroll( function() {
            var window_top = $(window).scrollTop();
            mic_header.stop();
            if (window_top >= 200) {
                mic_header.animate({'opacity':1,'margin-top':0},'slow','swing');                
            }
            if (window_top < 200) {
                mic_header.animate({'margin-top':'-103px','opacity':0},'fast','swing');                
            }
        });

        //intro 
        $('.title-wrap').hide();
        $('.image-wrap').show();
        $('.inner-intro').css('margin-top','-450px');

        function mic_intro() {
            $('.inner-intro').delay(200).animate({'margin-top':'200px'},'slow','swing', function() {
                $('.image-wrap').delay(750).fadeOut(500,'linear');
                $('.title-wrap').delay(1250).fadeIn(500,'linear');
            });
        }

        $('.down-arrow').click( function() {
            var section_one_top = $('#antigua').offset().top - 300;
            $('body,html').animate({scrollTop:section_one_top},'slow','swing');
        });     

    
        /* load gravatars */
        $('.comment img[data-gravatar]').each(function(){
            $(this).attr('src',$(this).attr('data-gravatar'));
        });
        
    }
    
    /* off the bat large screen actions */
    if (responsive_viewport > 1030) {
        
    }


    //Animated icons
    $('img.icon').addClass('animated pulse');
    
	
	// add all your scripts here
	
 
}); /* end of as page load scripts */




/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
*/
(function(w){
	// This fix addresses an iOS bug, so return early if the UA claims it's something else.
	if( !( /iPhone|iPad|iPod/.test( navigator.platform ) && navigator.userAgent.indexOf( "AppleWebKit" ) > -1 ) ){ return; }
    var doc = w.document;
    if( !doc.querySelector ){ return; }
    var meta = doc.querySelector( "meta[name=viewport]" ),
        initialContent = meta && meta.getAttribute( "content" ),
        disabledZoom = initialContent + ",maximum-scale=1",
        enabledZoom = initialContent + ",maximum-scale=10",
        enabled = true,
		x, y, z, aig;
    if( !meta ){ return; }
    function restoreZoom(){
        meta.setAttribute( "content", enabledZoom );
        enabled = true; }
    function disableZoom(){
        meta.setAttribute( "content", disabledZoom );
        enabled = false; }
    function checkTilt( e ){
		aig = e.accelerationIncludingGravity;
		x = Math.abs( aig.x );
		y = Math.abs( aig.y );
		z = Math.abs( aig.z );
		// If portrait orientation and in one of the danger zones
        if( !w.orientation && ( x > 7 || ( ( z > 6 && y < 8 || z < 8 && y > 6 ) && x > 5 ) ) ){
			if( enabled ){ disableZoom(); } }
		else if( !enabled ){ restoreZoom(); } }
	w.addEventListener( "orientationchange", restoreZoom, false );
	w.addEventListener( "devicemotion", checkTilt, false );
})( this );