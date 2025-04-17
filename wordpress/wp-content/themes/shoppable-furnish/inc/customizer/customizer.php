<?php
/**
 * Enqueue customizer css.
 */

function shoppable_furnish_customize_enqueue_style() {

	wp_enqueue_style( 'shoppable-furnish-customize-controls', get_stylesheet_directory_uri() . '/inc/customizer/customizer.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'shoppable_furnish_customize_enqueue_style', 99 );

/**
 * Kirki Customizer
 *
 * @return void
 */
add_action( 'init' , 'shoppable_furnish_kirki_fields', 999, 1 );

function shoppable_furnish_kirki_fields(){

	/**
	* If kirki is not installed do not run the kirki fields
	*/

	if ( !class_exists( 'Kirki' ) ) {
		return;
	}
	
	

	//Top Deals
	Kirki::add_section( 'blog_top_deals', array(
	    'title'          => esc_html__( 'Top Deals', 'shoppable-furnish' ),
	    'panel'          => 'blog_homepage_options',
	    'capability'     => 'edit_theme_options',
	    'priority'       => 26,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Top Deals Section', 'shoppable-furnish' ),
		'type'         => 'toggle',
		'settings'     => 'top_deal_section',
		'section'      => 'blog_top_deals',
		'default'      => false,
		'priority'	   => 10,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Top One', 'shoppable-furnish' ),
		'type'        => 'select',
		'settings'    => 'top_deal_one',
		'section'     => 'blog_top_deals',
		'default'     => '',
		'placeholder' => esc_html__( 'Select Top One', 'shoppable-furnish' ),
		'choices'     => hello_shoppable_get_post_categories(),
		'priority'	  => 20,
	));

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Top One Image', 'shoppable-furnish' ),
		'type'         => 'image',
		'settings'     => 'top_deal_image_one',
		'section'      => 'blog_top_deals',
		'default'      => '',
		'priority'	   => 30,
		'choices'     => array(
			'save_as' => 'id',
		),
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Top Two', 'shoppable-furnish' ),
		'type'        => 'select',
		'settings'    => 'top_deal_two',
		'section'     => 'blog_top_deals',
		'default'     => '',
		'placeholder' => esc_html__( 'Select Top Two', 'shoppable-furnish' ),
		'choices'     => hello_shoppable_get_post_categories(),
		'priority'	  => 40,
	));

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Top Two Image', 'shoppable-furnish' ),
		'type'         => 'image',
		'settings'     => 'top_deal_image_two',
		'section'      => 'blog_top_deals',
		'default'      => '',
		'priority'	   => 50,
		'choices'     => array(
			'save_as' => 'id',
		),
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Top Three', 'shoppable-furnish' ),
		'type'        => 'select',
		'settings'    => 'top_deal_three',
		'section'     => 'blog_top_deals',
		'default'     => '',
		'placeholder' => esc_html__( 'Select Top Three', 'shoppable-furnish' ),
		'choices'     => hello_shoppable_get_post_categories(),
		'priority'	  => 60,
	));

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Top Three Image', 'shoppable-furnish' ),
		'type'         => 'image',
		'settings'     => 'top_deal_image_three',
		'section'      => 'blog_top_deals',
		'default'      => '',
		'priority'	   => 70,
		'choices'     => array(
			'save_as' => 'id',
		),
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Top Four', 'shoppable-furnish' ),
		'type'        => 'select',
		'settings'    => 'top_deal_four',
		'section'     => 'blog_top_deals',
		'default'     => '',
		'placeholder' => esc_html__( 'Select Top Four', 'shoppable-furnish' ),
		'choices'     => hello_shoppable_get_post_categories(),
		'priority'	  => 80,
	));

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Top Four Image', 'shoppable-furnish' ),
		'type'         => 'image',
		'settings'     => 'top_deal_image_four',
		'section'      => 'blog_top_deals',
		'default'      => '',
		'priority'	   => 90,
		'choices'     => array(
			'save_as' => 'id',
		),
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Top Five', 'shoppable-furnish' ),
		'type'        => 'select',
		'settings'    => 'top_deal_five',
		'section'     => 'blog_top_deals',
		'default'     => '',
		'placeholder' => esc_html__( 'Select Top Five', 'shoppable-furnish' ),
		'choices'     => hello_shoppable_get_post_categories(),
		'priority'	  => 100,
	));

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Top Five Image', 'shoppable-furnish' ),
		'type'         => 'image',
		'settings'     => 'top_deal_image_five',
		'section'      => 'blog_top_deals',
		'default'      => '',
		'priority'	   => 110,
		'choices'     => array(
			'save_as' => 'id',
		),
	) );

	// Responsive for Top Deal
	Kirki::add_field( 'hello-shoppable', array(
	    'type'        => 'custom',
	    'settings'    => 'top_deals_responsive_separator',
	    'section'     => 'blog_top_deals',
	    'default'     => esc_html__( 'Responsive', 'shoppable-furnish' ),
	    'priority'	  => 120,
	    'active_callback' => array(
			array(
				'setting'  => 'top_deal_section',
				'operator' => '==',
				'value'    => true,
			),
		),
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Top Deals Section', 'shoppable-furnish' ),
		'type'         => 'toggle',
		'settings'     => 'mobile_top_deal',
		'section'      => 'blog_top_deals',
		'default'      => true,
		'priority'	   => 130,
		'active_callback' => array(
			array(
				'setting'  => 'top_deal_section',
				'operator' => '==',
				'value'    => true,
			),
		),
	) );

	//Feedback 
	Kirki::add_section( 'blog_feedbacks', array(
	    'title'          => esc_html__( 'Feedbacks', 'shoppable-furnish' ),
	    'panel'          => 'blog_homepage_options',
	    'capability'     => 'edit_theme_options',
	    'priority'       => 27,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Feedbacks Section', 'shoppable-furnish' ),
		'type'         => 'toggle',
		'settings'     => 'feedback_section',
		'section'      => 'blog_feedbacks',
		'default'      => false,
		'priority'	   => 10,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Page 1', 'shoppable-furnish' ),
		'type'        => 'select',
		'settings'    => 'feedbacks_page_one',
		'section'     => 'blog_feedbacks',
		'default'     => '',
		'placeholder' => esc_html__( 'Select Page 1', 'shoppable-furnish' ),
		'choices'     => shoppable_furnish_get_pages(),
		'priority'	  => 20,
	));
		

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Page 2', 'shoppable-furnish' ),
		'type'        => 'select',
		'settings'    => 'feedbacks_page_two',
		'section'     => 'blog_feedbacks',
		'default'     => '',
		'placeholder' => esc_html__( 'Select Page 2', 'shoppable-furnish' ),
		'choices'     => shoppable_furnish_get_pages(),
		'priority'	  => 30,
		
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Page 3', 'shoppable-furnish' ),
		'type'        => 'select',
		'settings'    => 'feedbacks_page_three',
		'section'     => 'blog_feedbacks',
		'default'     => '',
		'choices'     => shoppable_furnish_get_pages(),
		'placeholder' => esc_html__( 'Select Page 3', 'shoppable-furnish' ),
		'priority'	  => 40,
	
	) );

	// Responsive for Feedbacks
	Kirki::add_field( 'hello-shoppable', array(
	    'type'        => 'custom',
	    'settings'    => 'feedbacks_responsive_separator',
	    'section'     => 'blog_feedbacks',
	    'default'     => esc_html__( 'Responsive', 'shoppable-furnish' ),
	    'priority'	  => 50,
	    'active_callback' => array(
			array(
				'setting'  => 'feedback_section',
				'operator' => '==',
				'value'    => true,
			),
		),
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Feedbacks Section', 'shoppable-furnish' ),
		'type'         => 'toggle',
		'settings'     => 'mobile_feedbacks',
		'section'      => 'blog_feedbacks',
		'default'      => true,
		'priority'	   => 60,
		'active_callback' => array(
			array(
				'setting'  => 'feedback_section',
				'operator' => '==',
				'value'    => true,
			),
		),
	) );

	//Special Occasion
	Kirki::add_section('blog_special_occasion',array(
		'title'          => esc_html__( 'Special Occasions', 'shoppable-furnish' ),
	    'panel'          => 'blog_homepage_options',
	    'capability'     => 'edit_theme_options',
	    'priority'       => 28,
	));

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Special Occasion Section', 'shoppable-furnish' ),
		'type'         => 'toggle',
		'settings'     => 'special_occasion_section',
		'section'      => 'blog_special_occasion',
		'default'      => false,
		'priority'	   => 10,
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Page 1', 'shoppable-furnish' ),
		'type'        => 'select',
		'settings'    => 'blog_special_occasion_page_one',
		'section'      => 'blog_special_occasion',
		'default'     => '',
		'placeholder' => esc_html__( 'Select Page 1', 'shoppable-furnish' ),
		'choices'     => shoppable_furnish_get_pages(),
		'priority'	  => 20,
	));

	Kirki::add_field( 'hello-shoppable', array(
		'label'       => esc_html__( 'Page 2', 'shoppable-furnish' ),
		'type'        => 'select',
		'settings'    => 'blog_special_occasion_page_two',
		'section'      => 'blog_special_occasion',
		'default'     => '',
		'placeholder' => esc_html__( 'Select Page 2', 'shoppable-furnish' ),
		'choices'     => shoppable_furnish_get_pages(),
		'priority'	  => 30,
	));

	Kirki::add_field('hello-shoppable', array(
		'label'       => esc_html__( 'Page 3', 'shoppable-furnish' ),
		'type'        => 'select',
		'settings'    => 'blog_special_occasion_page_three',
		'section'      => 'blog_special_occasion',
		'default'     => '',
		'placeholder' => esc_html__( 'Select Page 3', 'shoppable-furnish' ),
		'choices'     => shoppable_furnish_get_pages(),
		'priority'	  => 40,
	));

	Kirki::add_field('hello-shoppable', array(
		'label'       => esc_html__( 'Page 4', 'shoppable-furnish' ),
		'type'        => 'select',
		'settings'    => 'blog_special_occasion_page_four',
		'section'      => 'blog_special_occasion',
		'default'     => '',
		'placeholder' => esc_html__( 'Select Page 4', 'shoppable-furnish' ),
		'choices'     => shoppable_furnish_get_pages(),
		'priority'	  => 50,
	));

	Kirki::add_field('hello-shoppable', array(
		'label'       => esc_html__( 'Page 5', 'shoppable-furnish' ),
		'type'        => 'select',
		'settings'    => 'blog_special_occasion_page_five',
		'section'      => 'blog_special_occasion',
		'default'     => '',
		'placeholder' => esc_html__( 'Select Page 5', 'shoppable-furnish' ),
		'choices'     => shoppable_furnish_get_pages(),
		'priority'	  => 60,
	));

	// Responsive for Special Occasion
	Kirki::add_field( 'hello-shoppable', array(
	    'type'        => 'custom',
	    'settings'    => 'special_occasion_responsive_separator',
	    'section'     => 'blog_special_occasion',
	    'default'     => esc_html__( 'Responsive', 'shoppable-furnish' ),
	    'priority'	  => 70,
	    'active_callback' => array(
			array(
				'setting'  => 'special_occasion_section',
				'operator' => '==',
				'value'    => true,
			),
		),
	) );

	Kirki::add_field( 'hello-shoppable', array(
		'label'        => esc_html__( 'Special Occasion Section', 'shoppable-furnish' ),
		'type'         => 'toggle',
		'settings'     => 'mobile_special_occasion',
		'section'      => 'blog_special_occasion',
		'default'      => true,
		'priority'	   => 80,
		'active_callback' => array(
			array(
				'setting'  => 'special_occasion_section',
				'operator' => '==',
				'value'    => true,
			),
		),
	) );
}