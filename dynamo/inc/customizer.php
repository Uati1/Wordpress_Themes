<?php 

	function dynamo_customize_register($wp_customize){
		
		$wp_customize-> add_section('settings',array(
			'title'=> __('Theme Settings','dynamo'),
			'decription' => sprintf(__('Options fo Dynamo Theme', 'dynamo')),
			'priority' => 130,
		));

		$wp_customize->add_setting('preset', array(
			'default' => __x('dark', 'dynamo'),
			'type' => 'theme_mod',
		));

		$wp_customize->add_control('preset', array(
			'type' => 'select',
			'label'=> __('preset', 'dynamo'),
			'section' => 'settings',
			'choices' => array(
				'dark'=>'Dark',
				'light'=> 'Light'
			),
			'priority'=> 1,
		));

	}

	add_action('customize_register','dynamo_customize_register');