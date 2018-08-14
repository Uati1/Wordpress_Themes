<?php

function theme_setup(){
	add_theme_support('post-thumbnails');

	register_nav_menus(array(
		'primary' => __('Primary Menu')
	));
}

add_action('after_setup_theme', 'theme_setup');

function init_widgets($id){
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' =>'<div class="sidebar-widget">',
		'after_widget' => '</div>',
		'before_title' =>'<h3>',
		'after_title' => '</h3>'
	));
}

add_action('widgets_init','init_widgets');

require get_template_directory(). './inc/customizer.php';

