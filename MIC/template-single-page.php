<?php /*
Template Name: Single Page
*/
?>

<?php get_header(); ?>

		<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="twelvecol first clearfix" role="main">

						<?php
							$title = get_field('single_title');
							$subtitle = get_field('single_sub_title');
							$content = get_field('single_content');
						?>

						<section class="single-page">

							<h2><?php echo $title; ?></h2>

							<span class="subtitle"><?php echo $subtitle; ?></span>

							<?php echo $content; ?>

						</section>
						
					</div> <!-- end #main -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>