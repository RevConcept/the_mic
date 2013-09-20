<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="eightcol first clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<?php if ( is_front_page() || is_home() ) : ?>

									<!-- top section -->
									<div id="top-section">
										<?php mic_print_top_section(); ?>
									</div>

									<!-- section two -->
									<div id="section-two">
										<?php mic_print_section_two(); ?>
									</div>

									<div id="window1">
									</div>

									<!-- section three -->
									<div id="section-three">
										<?php mic_print_section_three(); ?>
									</div>

									<div id="window2">
									</div>

									<!-- section four -->
									<div id="section-four">
										<?php mic_print_section_four(); ?>
									</div>

									<div id="map-section" >
										<div id="googleMap" style="width:100%;height:380px;"></div>
									</div>
								<?php endif; ?>

								

							</article> <!-- end article -->

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div> <!-- end #main -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
