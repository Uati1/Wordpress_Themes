<?php 
function theme_setup(){
	add_theme_support('post_thumbnails');

	register_nav_menus(array(
		'primary' => __('Primary Menu')
	));

}

add_action('after_setup_theme', 'theme_setup');

function set_excerpt_length(){
	return 60;
}

add_filter('excerpt_length', 'set_excerpt_length');

function init_widgets($id){
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div class="side-widget">',
		'after_widget' => '</div>',
		'before-title' => '<h3>',
		'after-title' => '</h3>'
	));
}
add_action('widgets_init', 'init_widgets');