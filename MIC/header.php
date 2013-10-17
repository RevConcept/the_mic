
<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- drop Google Analytics Here -->
		<!-- end analytics -->

		<!-- Google Maps -->
		<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCLmBQMfFI7MgH_u1mk3LcEH03dHB3ijjo&sensor=false"></script>
		<script>
			function initialize()
			{
			var mapProp = {
			  center:new google.maps.LatLng(<?php if (get_field( 'latlon', 'options')) : echo get_field('latlon', 'options'); else : echo '17.124714,-61.786423'; endif; ?>),
			  zoom:<?php if (get_field( 'zoom_level', 'options')) : echo get_field('zoom_level', 'options'); else : echo '12'; endif; ?>,
			  mapTypeId:google.maps.MapTypeId.ROADMAP
			  };
			var map=new google.maps.Map(document.getElementById("googleMap")
			  ,mapProp);
			}

			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
		<!-- end Google Maps -->

		<!--[if IE]>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/js/libs/PIE.js"></script>
		<![endif]-->

	</head>

	<body <?php body_class(); ?> >
		<div id="preloader">
			<div id="status">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/loading.gif" alt="loading" />
			</div>
		</div>

		<div id="container" id="mic-top">

			<header class="header" role="banner">

				<div id="inner-header" class="wrap clearfix">

					<div class="inner-top clearfix">
							<a class="h2" id="mobile-menu" onclick="mic.show_header_menu()">
								Menu
							</a>
					</div> <?php //end .inner-top ?>

					<div class="header-nav-wrapper">
						<nav role="navigation">
							<?php bones_main_nav(); ?>
						</nav>
					</div>
					

				</div> <!-- end #inner-header -->

			</header> <!-- end header -->
