<?php 

function theme_support(){
	register_nav_menus(array(
		'primary' => __('Primary menu')
	));

	add_theme_support('post-thumbnails');

	add_image_size('home-thumb', 715, 449 );
}

add_action('after_setup_theme', 'theme_support');

function init_widgets(){
	register_sidebar(array(
		'name' 	=> 'Sidebar',
		'id' 	=> 'sidebar',
		'before_widget'	=> '<div class="sidebar-widget">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>'
	));

  register_sidebar(array(
		'name' 	=> 'Footer 1',
		'id' 	=> 'footer1',
		'before_widget'	=> '<div>',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>'
	));

  register_sidebar(array(
		'name' 	=> 'Footer 2',
		'id' 	=> 'footer2',
		'before_widget'	=> '<div>',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>'
	));

  register_sidebar(array(
		'name' 	=> 'Footer 3',
		'id' 	=> 'footer3',
		'before_widget'	=> '<div>',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>'
	));

  register_sidebar(array(
		'name' 	=> 'Footer 4',
		'id' 	=> 'footer4',
		'before_widget'	=> '<div>',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>'
	));
}

add_action('widgets_init','init_widgets');