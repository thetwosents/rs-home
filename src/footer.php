			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="container">
					<div class="row top-xs center-xs center-md">
						<div class="col-xs-12 col-md-10">
							<a href="<?php echo site_url(); ?>"><img src="https://socialrevoltdesigns.com/demo/rewardstyle/wp-content/uploads/2018/08/logo.png" class="logo-img"></a>
							<nav>
							<?php 

									$args = array('menu' => 'Footer' );

									wp_nav_menu($args); 

							?>
							</nav>

							<ul class="social">
								<li><a href="https://www.facebook.com/rewardStyleHQ" target="_blank"><i class="fab fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/rewardStyleHQ" target="_blank"><i class="fab fa-twitter"></i></a></li>
								<li><a href="https://www.linkedin.com/company/rewardstyle/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
								<li><a href="https://www.instagram.com/rewardstyleHQ/" target="_blank"><i class="fab fa-instagram"></i></a></li>
							</ul>

							<p>Copyright 2018 rewardStyle.com | <a href="<?php site_url(); ?>/privacy-policy">Privacy Policy</a></p>
						</div>
					</div>
				</div>
			</footer>
			<!-- /footer -->

			

		</div>
		<!-- /wrapper -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jarallax/1.10.3/jarallax.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/jarallax/1.10.0/jarallax-element.js"></script>
	    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<?php wp_footer(); ?>

    


	</body>
</html>
