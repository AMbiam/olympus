<?php
/*
	WordPress Hooks for Supported.
*/
add_theme_support( 'post-thumbnails' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'wp-block-styles' );
add_theme_support( 'widget-customizer' );


function jelly_setup() {
	load_theme_textdomain( 'jelly',get_template_directory() . '/languages' );
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'jelly-blog-image', $width = 460, $height = 245, true );
	
	register_nav_menus( array(
		'primary'    => esc_html__( 'Top Menu', 'jelly' ),
	) );
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
		'flex-height' => true,
		'header-text' => array( 'site-title','site-description'),
	) );
	$jelly_defaults = array(
		'default-image'          => get_template_directory_uri().'/assets/images/blog-bg.jpg',
		'width'                  => 0,
		'height'                 => 0,
		'flex-height'            => 1400,
		'flex-width'             => 800,
		'uploads'                => true,
		'random-default'         => false,
		'header-text'            => false,
		'default-text-color'     => '',
		'wp-head-callback'       => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	register_default_headers( array(
    'default-image' => array(
        'url'           => get_template_directory_uri().'/assets/images/blog-bg.jpg',
        'thumbnail_url' => get_template_directory_uri().'/assets/images/blog-bg.jpg',
        'description'   => __( 'Default Header Image', 'jelly' )
    ),
) );
	add_theme_support( 'custom-header', $jelly_defaults );
	add_filter('siteorigin_widgets_active_widgets', 'jelly_active_widgets');
	function jelly_active_widgets($active){
  	
    //Bundled Widgets
    $active['video'] = true;
    $active['testimonial'] = true;
    $active['taxonomy'] = true;
    $active['social-media-buttons'] = true;
    $active['simple-masonry'] = true;
    $active['slider'] = true;
    $active['cta'] = true;
    $active['contact'] = true;
    $active['features'] = true;
    $active['headline'] = true;
    $active['hero'] = true;
    $active['icon'] = true;
    $active['image-grid'] = true;
    $active['price-table'] = true;
    $active['layout-slider'] = true;
  	$active['key-features-widget'] = true;
  	$active['showcase-image-widget'] = true;
  	return $active;
  }

}
add_action( 'after_setup_theme', 'jelly_setup' );
function jelly_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'jelly_content_width', 640 );
}
add_action( 'after_setup_theme', 'jelly_content_width', 0 );

add_filter('get_custom_logo','jelly_change_logo_class');
function jelly_change_logo_class($html)
{
	$html = str_replace('class="custom-logo"', 'class="img-responsive logo-fixed"', $html);
	$html = str_replace('width=', 'original-width=', $html);
	$html = str_replace('height=', 'original-height=', $html);
	$html = str_replace('class="custom-logo-link"', 'class="img-responsive logo-fixed"', $html);
	return $html;
}

function jelly_widgets_init() {
	register_sidebar( array(
		'name'          		=> esc_html__( 'Sidebar', 'jelly' ),
		'id'            		=> 'sidebar-1',
		'description'   		=> esc_html__( 'Add widgets here to appear in your sidebar.', 'jelly' ),
		'before_widget' 		=> '<div id="%1$s" class="widget sidebar-content %2$s">',
		'after_widget'  		=> '</div>',
		'before_title'  		=> '<div class="sidebar-title"><h3>',
		'after_title'   		=> '</h3></div>',
	) );
	register_sidebar( array(
		'name'          		=> __( 'Footer 1', 'jelly' ),
		'id'            		=> 'footer-1',
		'description'			=> esc_html__( 'Add widgets here to appear in your footer.', 'jelly' ),
		'before_widget' 		=> '<div id="%1$s" class="%2$s footer-grid">',
		'after_widget'  		=> '</div>',
		'before_title'  		=> '<h5 class="footer-title">',
		'after_title'   		=> '</h5>',
	) );
}
add_action( 'widgets_init', 'jelly_widgets_init' );



/*Customize sections*/
function bwpy_customizer( $wp_customize ) {
	// add new section
	$wp_customize->add_section( 'bwpy_theme_colors', array(
		'title' => __( 'Theme Colors', 'bwpy' ),
		'priority' => 100,
	) );

	// add color picker setting
	$wp_customize->add_setting( 'primary_color', array(
		'default' => '#ff0000'
	) );

	// add color picker control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color', array(
		'label' => 'Primary Color',
		'section' => 'bwpy_theme_colors',
		'settings' => 'primary_color',
	) ) );

	$wp_customize->add_setting( 'secondary_color', array(
		'default' => '#0000ff'
	) );

	// add color picker control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_color', array(
		'label' => 'Secondary Color',
		'section' => 'bwpy_theme_colors',
		'settings' => 'secondary_color',
	) ) );
}
add_action( 'customize_register', 'bwpy_customizer' );


/*Menu Options*/
function register_my_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu' ),
      'secondary-menu' => __( 'Secondary Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );