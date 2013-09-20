<?php
/*
Author: Eddie Machado
URL: htp://themble.com/bones/

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images,
sidebars, comments, ect.
*/

/************* INCLUDE NEEDED FILES ***************/

/*
1. library/bones.php
	- head cleanup (remove rsd, uri links, junk css, ect)
	- enqueueing scripts & styles
	- theme support functions
	- custom menu output & fallbacks
	- related post function
	- page-navi function
	- removing <p> from around images
	- customizing the post excerpt
	- custom google+ integration
	- adding custom fields to user profiles
*/
require_once( 'library/bones.php' ); // if you remove this, bones will break
/*
2. library/custom-post-type.php
	- an example custom post type
	- example custom taxonomy (like categories)
	- example custom taxonomy (like tags)
*/
//require_once( 'library/custom-post-type.php' ); // you can disable this if you like
/*
3. library/admin.php
	- removing some default WordPress dashboard widgets
	- an example custom dashboard widget
	- adding custom login css
	- changing text in footer of admin
*/
// require_once( 'library/admin.php' ); // this comes turned off by default
/*
4. library/translation/translation.php
	- adding support for other languages
*/
// require_once( 'library/translation/translation.php' ); // this comes turned off by default

/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
add_image_size( 'bones-thumb-600', 600, 150, true );
add_image_size( 'bones-thumb-300', 300, 100, true );
/*
to add more sizes, simply copy a line from above
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 300 sized image,
we would use the function:
<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
for the 600 x 100 image:
<?php the_post_thumbnail( 'bones-thumb-600' ); ?>

You can change the names and dimensions to whatever
you like. Enjoy!
*/

/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function bones_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __( 'Sidebar 1', 'bonestheme' ),
		'description' => __( 'The first (primary) sidebar.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	/*
	to add more sidebars or widgetized areas, just copy
	and edit the above sidebar code. In order to call
	your new sidebar just use the following code:

	Just change the name to whatever your new
	sidebar's id is, for example:

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __( 'Sidebar 2', 'bonestheme' ),
		'description' => __( 'The second (secondary) sidebar.', 'bonestheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	To call the sidebar in your template, you can just copy
	the sidebar.php file and rename it to your sidebar's name.
	So using the above example, it would be:
	sidebar-sidebar2.php

	*/
} // don't remove this bracket!

/************* COMMENT LAYOUT *********************/

// Comment Layout
function bones_comments( $comment, $args, $depth ) {
   $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?>>
		<article id="comment-<?php comment_ID(); ?>" class="clearfix">
			<header class="comment-author vcard">
				<?php
				/*
					this is the new responsive optimized comment image. It used the new HTML5 data-attribute to display comment gravatars on larger screens only. What this means is that on larger posts, mobile sites don't have a ton of requests for comment images. This makes load time incredibly fast! If you'd like to change it back, just replace it with the regular wordpress gravatar call:
					echo get_avatar($comment,$size='32',$default='<path_to_url>' );
				*/
				?>
				<!-- custom gravatar call -->
				<?php
					// create variable
					$bgauthemail = get_comment_author_email();
				?>
				<img data-gravatar="http://www.gravatar.com/avatar/<?php echo md5( $bgauthemail ); ?>?s=32" class="load-gravatar avatar avatar-48 photo" height="32" width="32" src="<?php echo get_template_directory_uri(); ?>/library/images/nothing.gif" />
				<!-- end custom gravatar call -->
				<?php printf(__( '<cite class="fn">%s</cite>', 'bonestheme' ), get_comment_author_link()) ?>
				<time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__( 'F jS, Y', 'bonestheme' )); ?> </a></time>
				<?php edit_comment_link(__( '(Edit)', 'bonestheme' ),'  ','') ?>
			</header>
			<?php if ($comment->comment_approved == '0') : ?>
				<div class="alert alert-info">
					<p><?php _e( 'Your comment is awaiting moderation.', 'bonestheme' ) ?></p>
				</div>
			<?php endif; ?>
			<section class="comment_content clearfix">
				<?php comment_text() ?>
			</section>
			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</article>
	<!-- </li> is added by WordPress automatically -->
<?php
} // don't remove this bracket!

/************* SEARCH FORM LAYOUT *****************/

// Search Form
function bones_wpsearch($form) {
	$form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
	<label class="screen-reader-text" for="s">' . __( 'Search for:', 'bonestheme' ) . '</label>
	<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="' . esc_attr__( 'Search the Site...', 'bonestheme' ) . '" />
	<input type="submit" id="searchsubmit" value="' . esc_attr__( 'Search' ) .'" />
	</form>';
	return $form;
} // don't remove this bracket!

function mic_print_top_section() {

	//top section	
	if ( get_field('top_section_image', 'options') ) :
		echo '<img src="' . get_field('top_section_image', 'options') . '" alt="Majestic Isle Casino" />';
	endif;
}

function mic_print_section_two() {

	//icon	
	if ( get_field('section_two_icon', 'options') ) :
		echo '<img src="' . get_field('section_two_icon', 'options') . '" alt="Majestic Isle Casino" />';
	endif;
	//title	
	if ( get_field('section_two_title', 'options') ) :
		echo '<h2>' . get_field('section_two_title', 'options') . '</h2>';
	endif;
	//subtitle	
	if ( get_field('section_two_subtitle', 'options') ) :
		echo '<span class="subtitle">' . get_field('section_two_subtitle', 'options') . '</span>';
	endif;
	//content	
	if ( get_field('section_two_content', 'options') ) :
		echo get_field('section_two_content', 'options');
	endif;
}

function mic_print_section_three() {

	//icon	
	if ( get_field('section_three_icon', 'options') ) :
		echo '<img src="' . get_field('section_three_icon', 'options') . '" alt="Majestic Isle Casino" />';
	endif;
	//title	
	if ( get_field('section_three_title', 'options') ) :
		echo '<h2>' . get_field('section_three_title', 'options') . '</h2>';
	endif;
	//subtitle	
	if ( get_field('section_three_subtitle', 'options') ) :
		echo '<span class="subtitle">' . get_field('section_three_subtitle', 'options') . '</span>';
	endif;
	//content	
	if ( get_field('section_three_content', 'options') ) :
		echo get_field('section_three_content', 'options');
	endif;
}

function mic_print_section_four() {

	//three columns
	if ( get_field('three_columns', 'options') ) :
		while ( has_sub_field('three_columns', 'options') ) :
			echo '<div id="three-columns">';
			echo '<img src="' . get_sub_field('icon') . '" alt="' . get_sub_field('title') . '" />';
			echo '<h3>' . get_sub_field('title') . '</h3>';
			echo get_sub_field('description');
			echo '</div>';
		endwhile;
	endif;

	//title	
	if ( get_field('last_section_title', 'options') ) :
		echo '<h3>' . get_field('last_section_title', 'options') . '</h3>';
	endif;
	//content
	if ( get_field('last_section_content', 'options') ) :
		echo get_field('last_section_content', 'options');
	endif;
	//cash pot title	
	if ( get_field('cash_pot_title', 'options') ) :
		echo '<span class="cash-pot">' . get_field('cash_pot_title', 'options') . '</span>';
	endif;
	//cash pot amount	
	if ( get_field('cash_pot_amount', 'options') ) :
		echo '<span class="pot-amount">' . get_field('cash_pot_amount', 'options') . '</span>';
	endif;
}

function mic_print_footer_options() {

	//sitemap
	if ( get_field('sitemap', 'options') ) :
		echo '<ul>';
		while( has_sub_field('sitemap', 'options') ) :
			echo '<li><a href="' . get_sub_field('page_link', 'options') . '" title="' . get_sub_field('menu_label', 'options') . '">' . get_sub_field('menu_label', 'options') . '</a></li>';
		endwhile;
	endif;

	
	//address
	$mic_address = get_field('address', 'options');
	if ($mic_address) :
		$mic_a = explode('|', $mic_address);
		echo '<h3>Address</h3>';
		echo '<p>' . $mic_a[0] . '<br/>' . $mic_a[1] . '</p>';
	endif;

	//contact
	$mic_contact = '';
	$mic_phone = get_field('phone', 'options');
	if ($mic_phone) :
		$mic_contact .= $mic_phone . '<br/>';
	endif;
	$mic_email = get_field('email', 'options');
	if ($mic_email) :
		$mic_contact .= $mic_email;
	endif;
	if ($mic_email || $mic_phone) :
		echo '<h3>Contact</h3>';
		echo '<p>';
		echo $mic_contact;
		echo '</p>';
	endif;


}

function mic_print_social_icons() {

	//social
	$mic_social = '';
	$facebook = get_field('facebook', 'options');
	if ($facebook) :
		$mic_social .= '<li><a href="' . $facebook . '" title="Facebook"></a></li>';
	endif;
	$twitter = get_field('twitter', 'options');
	if ($twitter) :
		$mic_social .= '<li><a href="' . $twitter . '" title="twitter"></a></li>';
	endif;
	$pinterest = get_field('pinterest', 'options');
	if ($pinterest) :
		$mic_social .= '<li><a href="' . $pinterest . '" title="pinterest"></a></li>';
	endif;
	$instagram = get_field('instagram', 'options');
	if ($instagram) :
		$mic_social .= '<li><a href="' . $instagram . '" title="instagram"></a></li>';
	endif;

	if ( $facebook || $twitter || $pinterest || $instagram ) :
		echo '<ul>';
		echo $mic_social;
		echo '</ul>';
	endif;
	
}


if ( function_exists('acf_add_options_sub_page') ) {
	acf_add_options_sub_page( 'Home Page' );
	acf_add_options_sub_page( 'Google Maps' );
	acf_add_options_sub_page( 'Footer' );
}

?>