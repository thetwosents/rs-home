			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="container">
					<div class="row top-xs center-xs center-md">
						<div class="col-xs-12 col-md-10">
							<a href="<?php echo site_url(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/img/logo.svg" class="logo-img rs"></a>
							<nav>
							<?php 

									$args = array('menu' => 'Footer' );

									wp_nav_menu($args); 

							?>
							</nav>

							<ul class="social">
								<li><a href="https://www.instagram.com/rewardstylehq/?hl=en " target="_blank"><i class="fab fa-instagram"></i></a></li>
								<li><a href="https://www.linkedin.com/company/rewardstyle/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
								
								<li><a href="https://www.crunchbase.com/organization/rewardstyle" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/img/icons/crunchbase.png" /></a></li>
							</ul>

							<div class="ltk-footer">
								<a href="https://liketoknow.it" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/img/LIKEtoKNOWit.png" class="logo-img"></a>
								<ul class="subnav">
									<li><a href="https://www.instagram.com/liketoknow.it/?hl=en" target="_blank">@LIKEtoKNOW.it</a></li>
									<li><a href="https://www.instagram.com/liketoknow.it.europe/?hl=en" target="_blank">@LIKEtoKNOW.it.europe</a></li>
									<li><a href="https://www.instagram.com/liketoknow.it.BRASIL/" target="_blank">@LIKEtoKNOW.it.brasil</a></li>
									<li><a href="https://www.instagram.com/liketoknow.it.family/?hl=en" target="_blank">@LIKEtoKNOW.it.family</a></li>
									<li><a href="https://www.instagram.com/liketoknow.it.home/?hl=en" target="_blank">@LIKEtoKNOW.it.home</a></li>
									
								</ul>
							</div>	

							<p>Copyright <?php echo the_date('Y'); ?> rewardStyle.com | <a href="<?php echo site_url(); ?>/about/privacy-policy">Privacy Policy</a></p>
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
