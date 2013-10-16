			<footer class="footer" role="contentinfo">

					<div id="inner-footer" class="wrap clearfix">

						<div class="clearfix" id="footer-col-wrap">

							<div class="threecol first">				
								<?php mic_print_sitemap(); ?>
							</div>

							<div class="fourcol">
								<?php mic_print_addr(); ?>
							</div>

							<div class="fivecol last">
								<h3>Updates from the MIC</h3>
								<p>Receive regular updates on upcoming events and deals from The MIC.</p>
								<form action="" method="POST" id="footer-form">
									<input type="text" name="name" placeholder="your name" class="ie-lameness"/>
									<input type="text" name="email" placeholder="your email" class="ie-lameness"/>
									<input type="submit" value="Submit" class="ie-lameness">
								</form>
							</div>
						</div>

						<div id="mic-social">
							<?php mic_print_social_icons(); ?>
						</div>
						<p class="source-org copyright">Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. All rights reserved. Site by <a href="">Revelation Concept</a>.</p>

					</div> <!-- end #inner-footer -->
				</div><!-- end #foot-wrapper -->

			</footer> <!-- end footer -->

		</div> <!-- end #container -->

		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->
