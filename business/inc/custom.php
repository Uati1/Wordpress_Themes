<?php 

function buisness_customize_register($wp_customize){
	$wp_customize-> add_section('banner', array(
		'title'=> __('Banner', 'buisness'),
		'decription' => sprintf(__('Options for homepage banner', 'buisness')),
		'priority' => 130
	));

	$wp_customize-> add_setting('banner_heading', array(
		'default' => _x('Banner Heading', 'buisness'),
		'type' => 'theme_mod'
	));

	$wp_customize-> add_control('banner_heading', array(
		'label' => __('Heading', 'buisness'),
		'section' => 'banner',
		'priority' => 20
	));

	$wp_customize-> add_setting('banner_text', array(
		'default' => _x('Welcome to business WordPress theme. This theme uses wordstrap 3 framework and can be customized to your liking!', 'buisness'),
		'type' => 'theme_mod'
	));

	$wp_customize-> add_control('banner_text', array(
		'label' => __('Text', 'buisness'),
		'section' => 'banner',
		'priority' => 20
	));

	$wp_customize-> add_setting('banner_btn_text', array(
		'default' => _x('Sign up!', 'buisness'),
		'type' => 'theme_mod'
	));

	$wp_customize-> add_control('banner_btn_text', array(
		'label' => __('Button Text', 'buisness'),
		'section' => 'banner',
		'priority' => 20
	));

	$wp_customize-> add_setting('banner_btn_url', array(
		'default' => _x('http://test.com', 'buisness'),
		'type' => 'theme_mod'
	));

	$wp_customize-> add_control('banner_btn_url', array(
		'label' => __('Button URL', 'buisness'),
		'section' => 'banner',
		'priority' => 20
	));

	$wp_customize-> add_setting('banner_img', array(
		'default' => get_bloginfo('template_directory').'/img/banner.jpg',
		'type' => 'theme_mod'
	));

	$wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'banner_img', array(
		'label' => __('Background image', 'buisness'),
		'section' => 'banner',
		'settings' => 'banner_img'
	)));

	$wp_customize->add_section('boxes', array(
		'title'          => __('Boxes', 'buisness'),
		'description'    => sprintf( __('Options for homepage boxes', 'business')
		),
		'priority'       => 130,
 	));

   // BOX 1

	// Box 1 Heading Setting
	$wp_customize->add_setting( 'box1_heading', array(
		'default'   => _x('Box 1 Heading', 'buisness'),
		'type'      => 'theme_mod'
	));

	// Box 1 Heading Control
	$wp_customize->add_control( 'box1_heading', array(
		'label'    => __('Box 1 Heading', 'buisness'),
		'section'  => 'boxes',
		'priority' => 20,
	));

    // Box 1 Text Setting
 	$wp_customize->add_setting( 'box1_text', array(
 		'default'              => _x('Maecenas sed diam eget risus varius blandit sit amet non magna.', 'buisness'),
 		'type'                 => 'theme_mod'
 	));

 	// Box 1 Text Control
 	$wp_customize->add_control( 'box1_text', array(
 		'label'    => __('Box 1 Text', 'buisness'),
 		'section'  => 'boxes',
 		'priority' => 20,
 	));

    // Box 1 Icon Setting
 	$wp_customize->add_setting( 'box1_icon', array(
 		'default'              => _x('bar-chart', 'buisness'),
 		'type'                 => 'theme_mod'
 	));

 	// Box 1 Icon Control
 	$wp_customize->add_control( 'box1_icon', array(
 		'label'    => __('Box 1 Icon', 'buisness'),
 		'section'  => 'boxes',
 		'priority' => 20,
 	));

 	// BOX 2


 	// Box 2 Heading Setting
 	$wp_customize->add_setting( 'box2_heading', array(
 		'default'              => _x('Box 2 Heading', 'buisness'),
 		'type'                 => 'theme_mod'
 	));

 	// Box 2 Heading Control
 	$wp_customize->add_control( 'box2_heading', array(
 		'label'    => __('Box 2 Heading', 'buisness'),
 		'section'  => 'boxes',
 		'priority' => 20,
 	));

    // Box 2 Text Setting
 	$wp_customize->add_setting( 'box2_text', array(
 		'default'              => _x('Maecenas sed diam eget risus varius blandit sit amet non magna.', 'buisness'),
 		'type'                 => 'theme_mod'
 	));

 	// Box 2 Text Control
 	$wp_customize->add_control( 'box2_text', array(
 		'label'    => __('Box 2 Text', 'buisness'),
 		'section'  => 'boxes',
 		'priority' => 20,
 	));

    // Box 2 Icon Setting
	$wp_customize->add_setting( 'box2_icon', array(
		'default'              => _x('code', 'buisness'),
		'type'                 => 'theme_mod'
	));

	// Box 2 Icon Control
	$wp_customize->add_control( 'box2_icon', array(
		'label'    => __('Box 2 Icon', 'buisness'),
		'section'  => 'boxes',
		'priority' => 20,
	));

	// BOX 3

	// Box 3 Heading Setting
	$wp_customize->add_setting( 'box3_heading', array(
		'default'              => _x('Box 3 Heading', 'buisness'),
		'type'                 => 'theme_mod'
	));

	// Box 3 Heading Control
	$wp_customize->add_control( 'box3_heading', array(
		'label'    => __('Box 3 Heading', 'buisness'),
		'section'  => 'boxes',
		'priority' => 20,
	));

    // Box 3 Text Setting
	$wp_customize->add_setting( 'box3_text', array(
		'default'              => _x('Maecenas sed diam eget risus varius blandit sit amet non magna.', 'buisness'),
		'type'                 => 'theme_mod'
	));

	// Box 3 Text Control
	$wp_customize->add_control( 'box3_text', array(
		'label'    => __('Box 3 Text', 'buisness'),
		'section'  => 'boxes',
		'priority' => 20,
	));

    // Box 3 Icon Setting
	$wp_customize->add_setting( 'box3_icon', array(
		'default'              => _x('desktop', 'buisness'),
		'type'                 => 'theme_mod'
	));

	// Box 3 Icon Control
	$wp_customize->add_control( 'box3_icon', array(
		'label'    => __('Box 3 Icon', 'buisness'),
		'section'  => 'boxes',
		'priority' => 20,
	));
}

add_action('customize_register', 'buisness_customize_register');