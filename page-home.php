<?php get_header(); ?>
<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
	<div class="content-area">
		<main>\
			<section class="slide">
				<div class="container">
					<div class="row">Slide</div>
				</div>
			</section>		
			<section class="services">
					<div class="container">
						<div class="row">Services</div>
					</div>	
			</section>
			<section class="middle-area">
				<div class="container">
					<div class="row">
						<aside class="sidebar col-md-3">Sidebar</aside>
						<div class="news col-md-9">
							<p>This'n here is where all the home page stuff is gonna go mmmm hm.</p>
						</div>
					</div>
				</div>	
			</section>
			<section class="map">
				<div class="container">
					<div class="row">Map</div>
				</div>
			</section>
		</main>
	</div>
<?php get_footer(); ?>