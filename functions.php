<?php 
	function solutions_scripts(){
		//stylesheets and javascript
			wp_enqueue_style('main_style',get_stylesheet_uri());
			wp_enqueue_style('main_style',get_template_directory_uri().'./css/style.css');
			wp_enqueue_style('menu_style',get_template_directory_uri().'./css/menu.css');
			wp_enqueue_style('boot_file',get_template_directory_uri().'/css/bootstrap.css');
			wp_enqueue_style('ani_file',get_template_directory_uri().'/css/animate.css');
			wp_enqueue_style('carousel_file',get_template_directory_uri().'/css/owl.carousel.min.css');
			wp_enqueue_style('font_file',get_template_directory_uri().'/fonts/ionicons/css/ionicons.min.css');
			wp_enqueue_style('font_aws_file',get_template_directory_uri().'/fonts/fontawesome/css/font-awesome.min.css');
			wp_enqueue_style('font_flat_file',get_template_directory_uri().'/fonts/flaticon/font/flaticon.css');

			wp_enqueue_style('main_style',get_template_directory_uri().'./js/jquery-3.2.1.min.js',array(),'1.1',true);
			wp_enqueue_style('main_style',get_template_directory_uri().'./js/jquery-migrate-3.0.0.js',array(),'1.1',true);
			wp_enqueue_style('main_style',get_template_directory_uri().'./js/popper.min.js',array(),'1.1',true);
			wp_enqueue_style('main_style',get_template_directory_uri().'./js/bootstrap.min.js',array(),'1.1',true);
			wp_enqueue_style('main_style',get_template_directory_uri().'./js/owl.carousel.min.js',array(),'1.1',true);
			wp_enqueue_style('main_style',get_template_directory_uri().'./js/jquery.waypoints.min.js',array(),'1.1',true);
			wp_enqueue_style('main_style',get_template_directory_uri().'./js/jquery.stellar.min.js',array(),'1.1',true);
			wp_enqueue_style('main_style',get_template_directory_uri().'./js/jquery.waypoints.min.js',array(),'1.1',true);
			wp_enqueue_style('main_style',get_template_directory_uri().'./js/main.js',array(),'1.1',true);
	}
			add_action('wp_enqueue_scripts','solutions_scripts');


	function register_profotech_theme(){
			// Menu register
		register_nav_menus(
			array(
				'primary-menu' => __('Primary menu'),
				'footer-menu' => __('Footer menu')
			)
		);
	}
		add_action('init','register_profotech_theme');

	add_theme_support('custom-logo');
 	add_theme_support( 'custom-logo', array(
	    	'height'      => 50,
            'width'       => 70,
            'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
		));

 	// widget
 	function rtcamp_widgets_init() {
        register_sidebar( array(
            'name'          => __( 'News', 'rtcamp' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Add widgets here to appear in your sidebar.', 'rtcamp' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
    ) );
        register_sidebar( array(
                'name'          => __( 'Follow us on facebook', 'rtcamp' ),
                'id'            => 'sidebar-2',
                'description'   => __( 'Add widgets here to appear in your sidebar.', 'rtcamp' ),
                'before_widget' => '',
                'after_widget'  => '',
                'before_title'  => '<h2>',
                'after_title'   => '</h2>',
    ) );
            register_sidebar( array(
                'name'          => __( 'Weather', 'rtcamp' ),
                'id'            => 'sidebar-3',
                'description'   => __( 'Add widgets here to appear in your sidebar.', 'rtcamp' ),
                'before_widget' => '',
                'after_widget'  => '',
                'before_title'  => '<h2>',
                'after_title'   => '</h2>',      
    ) );
    }
 		add_action( 'widgets_init', 'rtcamp_widgets_init' );

?>	