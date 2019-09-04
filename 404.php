<?php get_header(); ?>

<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

	<div class="content-area">
		<main>
			<section class="middle-area">
				<div class="container">
					<div class="row">
						
						<div class="error-404">
                            <header>
                                <h1>Page not found</h1>
                                <p>Sorry, playa. This page be all like not here n' shit.</p>
                            </header>
                       
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