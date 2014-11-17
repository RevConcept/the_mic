<?php get_header(); ?>

<!-- top section -->
	
	<?php 

	$bg_img = get_field('top_bg_img', 'options');

	if($bg_img) { ?>

	<div id="intro" style="background: url(<?php echo $bg_img[url]; ?>) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">

	<?php } else { ?>
	
	<div id="intro">

	<?php } ?>
		
			<?php mic_print_intro(); ?>
		
	</div>

<?php $mic_page_order = get_field('page_order', 'options'); 

	  $mic_window_count = 0;

	  foreach($mic_page_order as $mic_page) :

	  	$mic_page_id = $mic_page[select_a_page]->ID;
	    
	    $mic_page_tempate = get_page_template_slug( $mic_page_id );

	    //print a main section
	    if ($mic_page_tempate == 'main-section-template.php') : ?>

			<div class="section-wrapper">
				<div class="inner-section">
					<div class="main-section wrap clearfix">
						
							<?php mic_print_main_section($mic_page_id); ?>
						
					</div>
				</div>
			</div>
	    	
	   <?php endif;

	   //print a block section 
	    if ($mic_page_tempate == 'block-section-template.php') : ?>

			<div class="section-wrapper last-section">
				<div class="inner-section">
					<div class="section-four wrap clearfix">
						
							<?php mic_print_block_section($mic_page_id); ?>
						
					</div>
				</div>
			</div>

	  <?php  endif;


        // add a window section
  	  	if($mic_page[image_after]) :
	  		$mic_window_count++; ?>
	  		<div id="window<?php echo $mic_window_count; ?>">
			</div>
	  <?php endif;
	  endforeach;
	  

?>

									<div id="map-section" >
										<div id="googleMap" style="width:100%;height:380px;"></div>
									</div>

<?php get_footer(); ?>