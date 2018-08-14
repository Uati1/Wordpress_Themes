<?php 

function cleancut_customize_register($wp_customize){
	$wp_customize-> add_section('showcase', array(
		'title'=> __('Showcase', 'cleancut'),
		'decription' => sprintf(__('Options for showcase area', 'cleancut')),
		'priority' => 130
	));

	$wp_customize-> add_setting('showcase_img', array(
		'default' => get_bloginfo('template_directory').'/img/showcase.jpg',
		'type' => 'theme_mod'
	));

	$wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize,'showcase_img', array(
		'label' => __('Heading', 'cleancut'),
		'section' => 'showcase',
		'settings' => 'showcase_img',
		'priority' => 3
	)));

	$wp_customize-> add_setting('showcase_height', array(
		'default' => _x(700, 'cleancut'),
		'type' => 'theme_mod'
	));

	$wp_customize-> add_control('showcase_height', array(
		'label' => __('Showcase Height', 'cleancut'),
		'section' => 'showcase',
		'priority' => 2
	));

	$wp_customize-> add_setting('showcase_heading', array(
		'default' => _x('Cleancut Theme', 'cleancut'),
		'type' => 'theme_mod'
	));

	$wp_customize-> add_control('showcase_heading', array(
		'label' => __('Heading', 'cleancut'),
		'section' => 'showcase',
		'priority' => 3
	));

	$wp_customize-> add_setting('showcase_text', array(
		'default' => _x('Custom WP theme by you !', 'cleancut'),
		'type' => 'theme_mod'
	));

	$wp_customize-> add_control('showcase_text', array(
		'label' => __('text', 'cleancut'),
		'section' => 'showcase',
		'priority' => 4
	));

	$wp_customize-> add_section('socials', array(
		'title'=> __('Socials', 'cleancut'),
		'decription' => sprintf(__('Social media URLs', 'cleancut')),
		'priority' => 140
	));

	$wp_customize-> add_setting('facebook_url', array(
		'default' => _x('http://www.facebook.com', 'cleancut'),
		'type' => 'theme_mod'
	));

	$wp_customize-> add_control('facebook_url', array(
		'label' => __('Facebook URL', 'cleancut'),
		'section' => 'socials',
		'priority' => 1
	));

	$wp_customize-> add_setting('twitter_url', array(
		'default' => _x('http://www.twitter.com', 'cleancut'),
		'type' => 'theme_mod'
	));

	$wp_customize-> add_control('twitter_url', array(
		'label' => __('Twitter URL', 'cleancut'),
		'section' => 'socials',
		'priority' => 2
	));

	$wp_customize-> add_setting('linkedin_url', array(
		'default' => _x('http://www.linkedin.com', 'cleancut'),
		'type' => 'theme_mod'
	));

	$wp_customize-> add_control('linkedin_url', array(
		'label' => __('Linkedin URL', 'cleancut'),
		'section' => 'socials',
		'priority' => 3
	));

	$wp_customize-> add_section('banner', array(
		'title'=> __('Bottom Banner', 'cleancut'),
		'decription' => sprintf(__('Options for bottom banner area', 'cleancut')),
		'priority' => 160
	));

	$wp_customize-> add_setting('banner_img', array(
		'default' => get_bloginfo('template_directory').'/img/banner.jpg',
		'type' => 'theme_mod'
	));

	$wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize,'banner_img', array(
		'label' => __('Background Image', 'cleancut'),
		'section' => 'banner',
		'settings' => 'banner_img',
		'priority' => 1
	)));

	$wp_customize-> add_setting('banner_heading', array(
		'default' => _x('Follow us on social media', 'cleancut'),
		'type' => 'theme_mod'
	));

	$wp_customize-> add_control('banner_heading', array(
		'label' => __('Heading', 'cleancut'),
		'section' => 'banner',
		'priority' => 2
	));

	$wp_customize-> add_section('misc', array(
		'title'=> __('Misc options', 'cleancut'),
		'decription' => sprintf(__('Misc options fot theme', 'cleancut')),
		'priority' => 150,
	));

	$wp_customize-> add_setting('animation', array(
		'default' => 1,
	));

	$wp_customize-> add_control(new WP_Customize_Control($wp_customize,'animation', array(
		'label' => __('Enable animation', 'cleancut'),
		'section' => 'misc',
		'settings' => 'animation',
		'type' => 'checkbox',
	)));



}

add_action('customize_register', 'cleancut_customize_register');