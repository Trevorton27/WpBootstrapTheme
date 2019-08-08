<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>bstrap4</title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<section class="top-bar">
			<div class="container">
				<div class="row">
					<div class="social-media-icons col-xl-9 col-md-7 col-sm-7 col-6">Social Icons</div>
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