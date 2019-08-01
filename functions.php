<?php 

// Including stylesheet and script files
function load_scripts(){
	wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js', array( 'jquery' ), '4.0.0', true );
	wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css', array(), '4.0.0', 'all' );
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );


//main theme configuration function
function bstrpFour_config() {
 
	register_nav_menus(
		array(
			'my_main_menu' => 'Main Menu',
			'footer_menu' => 'Footer Menu'
		)
	);

	$args = array(
		'height' => 325,
		'width'  => 1920
	);
	add_theme_support( 'custom-header', $args );
	add_theme_support( 'post-thumbnails');
	add_theme_support( 'post-formats', array('image', 'video') );
}

add_action( 'after_setup_theme', 'bstrpFour_config', 0);

add_action( 'widgets_init', 'bstrpFour_sidebars');
function bstrpFour_sidebars(){
	register_sidebar(
		array(
			'name' => 'Home Page Sidebar',
			'id' => 'sidebar-1',
			'description' => 'This sidebar will display on the home page. You can add any widgets you want to use here.',
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title"> ',
			'after_title' => '</h2>'
		)
	);

	register_sidebar(
		array(
			'name' => 'Blog Sidebar',
			'id' => 'sidebar-2',
			'description' => 'This sidebar will display on the blog page. You can add any widgets you want to use here.',
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title"> ',
			'after_title' => '</h2>'
		)
	);
	register_sidebar(
		array(
			'name' => 'Service 1',
			'id' => 'services-1',
			'description' => 'First services area.',
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title"> ',
			'after_title' => '</h2>'
		)
	);
	register_sidebar(
		array(
			'name' => 'Service 2',
			'id' => 'services-2',
			'description' => 'Second services area.',
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title"> ',
			'after_title' => '</h2>'
		)
	);
	register_sidebar(
		array(
			'name' => 'Service 3',
			'id' => 'services-3',
			'description' => 'Third services area.',
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title"> ',
			'after_title' => '</h2>'
		)
	);

}