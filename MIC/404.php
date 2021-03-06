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

							<h2>Not Found</h2>

							<span class="subtitle">Oops!</span>

							<p>Sorry. What you're looking for can't be found. Please click the button below to go back to the main site.</p>

							<a class="button" href="<?php bloginfo('url'); ?>">Back</a>

						</section>
						
					</div> <!-- end #main -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>