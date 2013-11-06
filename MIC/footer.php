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

								<!-- ** START CONTACT FORM ** -->
								<style>
								.link,
								.link a,
								.signupframe
								{
									color: #ffffff;
									font-family: Arial, Helvetica, sans-serif;
									font-size: 13px;
									}
									.link,
									.link a {
										text-decoration: none;
										}
									.signupframe td {
										padding: 0px;
										}
								.signupframe .required {
									font-size: 10px;
									}
								</style>
								<form method="post" action="https://app.icontact.com/icp/signup.php" name="icpsignup" id="icpsignup769" accept-charset="UTF-8" onsubmit="return verifyRequired769();" >
								<input type="hidden" name="redirect" value="http://themic.com/thanks">
								<input type="hidden" name="errorredirect" value="http://themic.com/oops">

								<div id="SignUp">
								<table width="260" class="signupframe" border="0" cellspacing="0" cellpadding="5">
									<tr>
								      <td align="left">
								        <input type="text" placeholder="your name" name="fields_fname" class="ie-lameness">
								      </td>
								    </tr>
									<tr>
								      <td align="left">
								        <input type="text" placeholder="your email" name="fields_email" class="ie-lameness">
								      </td>
								    </tr>
								    <input type="hidden" name="listid" value="14249">
								    <input type="hidden" name="specialid:14249" value="OMFT">

								    <input type="hidden" name="clientid" value="1410850">
								    <input type="hidden" name="formid" value="769">
								    <input type="hidden" name="reallistid" value="1">
								    <input type="hidden" name="doubleopt" value="0">
								    <tr>
								      <td><input type="submit" name="Submit" value="Submit"></td>
								    </tr>
								    </table>
								</div>
								</form>
								<script type="text/javascript">

								var icpForm769 = document.getElementById('icpsignup769');

								if (document.location.protocol === "https:")

									icpForm769.action = "https://app.icontact.com/icp/signup.php";
								function verifyRequired769() {
								  if (icpForm769["fields_fname"].value == "") {
								    icpForm769["fields_fname"].focus();
								    alert("The Name field is required.");
								    return false;
								  }
								  if (icpForm769["fields_email"].value == "") {
								    icpForm769["fields_email"].focus();
								    alert("The Email field is required.");
								    return false;
								  }


								return true;
								}
								</script>
								<!-- ** END CONTACT FORM ** -->


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
