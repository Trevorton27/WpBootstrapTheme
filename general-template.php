<?php
/*
Template Name: General Template
*/ ?>

<?php get_header(); ?>
<img class="img-fluid" src="<?php header_image(); ?>" height="<?php  echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
	<div class="content-area">
		<main>
					
			
			<section class="middle-area">
				<div class="container">
					
						<div class="news ">
							<?php 
								if(have_posts() ):
									while(have_posts()): the_post();
							?>
							<article>
								<h2><?php the_title(); ?></h2>
								<p><?php the_content(); ?></p>
                            </article>
                            <p>This page is generated via the general-template.php file</p>
							<?php 
							endwhile;
								else:
							?>

							<p>Ain't nothin to display, dangnabbit.</p>

								<?php endif; ?>
							
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