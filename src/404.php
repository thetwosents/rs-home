<?php get_header(); ?>

	<section class="error-page" data-jarallax disableParallax="/iPad|iPhone|iPod|Android/" data-speed="0.2" class="jarallax">
	<img class="jarallax-img" src="http://placehold.it/2000x600" alt="">
		<div class="container">
			<div class="row middle-xs center-xs">
				<div class="col-xs-12 col-md-10">
					<main role="main" aria-label="Content">
						<!-- article -->
						<article id="post-404">

							<h1><?php esc_html_e( 'Page not found', 'html5blank' ); ?></h1>
							<h2>
								<a href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e( 'Return home?', 'html5blank' ); ?></a>
							</h2>

						</article>
						<!-- /article -->

					</main>
				</div>
			</div>
		</div>
	</section>

	

<?php get_footer(); ?>
