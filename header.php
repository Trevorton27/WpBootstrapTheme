<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php  bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<section class="top-bar">
			<div class="container">
				<div class="row">
					<div class="social-media-icons col-xl-9 col-md-7 col-sm-7 col-6">
						<?php if( is_active_sidebar('social-media') ) {
							dynamic_sidebar('social-media');
						} ?>
					</div>
					<div class="search col-xl-3 col-md-5 col-sm-5 col-6 text-right"><?php get_search_form(); ?></div>					
				</div>
			</div>

		</section>
		<section class="menu-area">
			<section class="logo">Logo</section>
			<nav class="main-menu col-md-10 text-right">
				<?php wp_nav_menu( array( 'theme_location' => 'my_main_menu')); ?>
			</nav>
		</section>
	</header>