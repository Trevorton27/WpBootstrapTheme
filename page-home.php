<?php get_header(); ?>
<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
	<div class="content-area">
		<main>\
			<section class="slide">
				<div class="container">
					<div class="row"><?php motoPressSlider( "home-slider" ) ?></div>
				</div>
			</section>		
			<section class="services">
					<div class="container">
						<h1>Our Services</h1>
						<div class="row">
							<div class="col-sm-4">
								<div class="services-item">
									<?php 
									if(is_active_sidebar( 'services-1' )){
										dynamic_sidebar( 'services-1' );
									} 
									?>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="services-item">
								<?php 
									if(is_active_sidebar( 'services-2' )){
										dynamic_sidebar( 'services-2' );
									} 
									?>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="services-item">
								<?php 
									if(is_active_sidebar( 'services-3' )){
										dynamic_sidebar( 'services-3' );
									} 
									?>
								</div>
							</div>
						</div>
					</div>	
			</section>
			<section class="middle-area">
				<div class="container">
					<div class="row">
						<aside class="sidebar col-md-3 h-100">
							<?php 
							get_sidebar( 'home' ); 
							?>
							</aside>
						<div class="news col-md-9">
							<div class="container">
								<div class="row">
									<?php 
									//first loop
									$featured = new WP_Query( 'post_type=post&posts_per_page=3&cat=4,3');
									if( $featured->have_posts()):
										while($featured->have_posts()): 
											$featured->the_post();
										?>
										<div class="col-12">
											<?php get_template_part( 'template-parts/content', 'featured'); ?>
										</div>
										<?php
									endwhile;
									wp_reset_postdata();
								endif;
									//second loop

									$args = array(
										'post_type' =>  'post',
										'posts_per_page' => 2,
										'category__not_in' => array( 2 ),
										'category__in' => array( 4, 3 ),
										//'offset' => 1
									);

								$secondary = new WP_Query( $args );
								if( $secondary->have_posts()):
									while($secondary->have_posts()): 
										$secondary->the_post();
									?>
									<div class="col-sm-6">
										<?php get_template_part( 'template-parts/content', 'secondary'); ?>
									</div>
									<?php
								endwhile;
								wp_reset_postdata();
							endif;

								?>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</section>
			<section class="map">
				<iframe
					width="100%"
					height="350"
					frameborder="0" style="border:0"
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3305.634007292698!2d134.53816485101308!3d34.0532582805105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35530d4e1bd13bdd%3A0x85c46f104bca2532!2zTSBDaXR5IEVuZ2xpc2gg6Iux6Kqe5pWZ5a6k!5e0!3m2!1sen!2sjp!4v1567505727541!5m2!1sen!2sjp" allowfullscreen>
						</iframe>
			</section>
		</main>
	</div>
<?php get_footer(); ?>
/*https://www.google.com/maps/embed/v1/place?key=AIzaSyD0kLPS-L1UmoGTeC-4lGjiGHSEHnybMwg&q=n&zoom=15*/