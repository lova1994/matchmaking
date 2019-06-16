<?php 



if ( ! function_exists( 'matchmaking_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 */
	function matchmaking_setup() {

		/*  Adds dynamic title */ 
		
		add_theme_support( 'title-tag' );

		/* Support for featured image */
        add_theme_support( 'post-thumbnails' );
        
        // lägger till custom storlek på featured image för ikonerna
        add_image_size( 'icons', 9999, 169 ); // unlimited width and 169 px height

        // funktionalitet för custom header 
        /* 
$args = array(
	'width'         => 980,
	'height'        => 600,
	'default-image' => get_template_directory_uri() . '/images/header.jpg',
	'uploads'       => true,
);
add_theme_support( 'custom-header', $args );
*/ 

		
// registrerar meny
		register_nav_menus(
			array(
                'menu-1' => __( 'Primary', 'matchmaking' ),
                'footer' => __( 'Footer Menu', 'matchmaking' ),
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'matchmaking_setup' );

/* avaktiverar sökfunktion */
function wpb_filter_query( $query, $error = true ) {
    if ( is_search() ) {
    $query->is_search = false;
    $query->query_vars[s] = false;
    $query->query[s] = false;
    if ( $error == true )
    $query->is_404 = true;
    }
    }
    add_action( 'parse_query', 'wpb_filter_query' );
    add_filter( 'get_search_form', create_function( '$a', "return null;" ) );
    function remove_search_widget() {
        unregister_widget('WP_Widget_Search');
    }
    add_action( 'widgets_init', 'remove_search_widget' );

/* Widget areas, 
för att få dynamiskt innehåll i temat */

// Widget i vänstra kolumnen av sidfoten
register_sidebar( array(
    'name' => 'Footer Area 1',
    'id' => 'footer-1',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );


    register_sidebar( array(
        'name' => 'Footer Area 2',
        'id' => 'footer-2',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
        ) );


        register_sidebar( array(
            'name' => 'Front Page Area 1',
            'id' => 'front-page-1',
            'description' => 'Appears in the front page, left column',
            'before_widget' => ' <div class="column-left">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
            ) );

        register_sidebar( array(
            'name' => 'Front Page Area 2',
            'id' => 'front-page-2',
            'description' => 'Appears in the front page, right column',
            'before_widget' => ' <div class="column-right">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
            ) );
   
?>