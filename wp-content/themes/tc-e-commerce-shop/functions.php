<?php
/**
 * TC E-Commerce Shop functions and definitions
 *
 * @package TC E-Commerce Shop
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

if ( ! function_exists( 'tc_e_commerce_shop_setup' ) ) :

/* Theme Setup */
function tc_e_commerce_shop_setup() {

	$GLOBALS['content_width'] = apply_filters( 'tc_e_commerce_shop_content_width', 640 );

	load_theme_textdomain( 'tc-e-commerce-shop', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('tc-e-commerce-shop-homepage-thumb',240,145,true);
	
       register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'tc-e-commerce-shop' ),
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );

	add_theme_support ('html5', array (
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

	add_theme_support('responsive-embeds');
	
	/*
	* Enable support for Post Formats.
	*
	* See: https://codex.wordpress.org/Post_Formats
	*/
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	/* Selective refresh for widgets */
	add_theme_support( 'customize-selective-refresh-widgets' );

	/* Starter Content */
	add_theme_support( 'starter-content', array(
		'widgets' => array(
			'sidebar-1' => array(
				'text_business_info',
				'search',
				'text_about',
			),
			'sidebar-2' => array(
				'text_business_info',
			),
			'sidebar-3' => array(
				'text_about',
				'search',
			),
			'footer-1' => array(
				'text_about',
			),
			'footer-2' => array(
				'archives',
			),
			'footer-3' => array(
				'text_business_info',
			),
			'footer-4' => array(
				'search',
			),
		),

		'posts' => array(
			'home',
			'about' => array(
				'thumbnail' => '{{image-espresso}}',
			),
			'contact' => array(
				'thumbnail' => '{{image-coffee}}',
			),
			'blog' => array(
				'thumbnail' => '{{image-coffee}}',
			),
		),

		'theme_mods' => array(
			'tc_e_commerce_shop_mail' => __('example@gmail.com', 'tc-e-commerce-shop' ),
			'tc_e_commerce_shop_call' => __('9874563210', 'tc-e-commerce-shop' ),
			'tc_e_commerce_shop_facebook_url' => 'www.facebook.com',
			'tc_e_commerce_shop_twitter_url' => 'www.twitter.com',
			'tc_e_commerce_shop_instagram_url' => 'www.instagram.com',
			'tc_e_commerce_shop_youtube_url' => 'www.youtube.com',
			'tc_e_commerce_shop_footer_copy' => __('By ThemesCaliber', 'tc-e-commerce-shop' )
		),

		'nav_menus' => array(
			'primary' => array(
				'name' => __( 'Primary Menu', 'tc-e-commerce-shop' ),
				'items' => array(
					'page_home',
					'page_about',
					'page_blog',
					'page_contact',
				),
			),
		),
    ));

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', tc_e_commerce_shop_font_url() ) );

	// Dashboard Theme Notification
	global $pagenow;
	
	if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
		add_action( 'admin_notices', 'tc_e_commerce_shop_activation_notice' );
	}
}
endif;
add_action( 'after_setup_theme', 'tc_e_commerce_shop_setup' );

// Dashboard Theme Notification
function tc_e_commerce_shop_activation_notice() {
	echo '<div class="welcome-notice notice notice-success is-dismissible">';
		echo '<h2>'. esc_html__( 'Thank You!!!!!', 'tc-e-commerce-shop' ) .'</h2>';
		echo '<p>'. esc_html__( 'Much grateful to you for choosing our Tc Ecommerce theme from themescaliber. we praise you for opting our services over others. we are obliged to invite you on our welcome page to render you with our outstanding services.', 'tc-e-commerce-shop' ) .'</p>';
		echo '<p><a href="'. esc_url( admin_url( 'themes.php?page=tc_e_commerce_shop_guide' ) ) .'" class="button button-primary">'. esc_html__( 'Click Here...', 'tc-e-commerce-shop' ) .'</a></p>';
	echo '</div>';
}

/* Theme Widgets Setup */
function tc_e_commerce_shop_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'tc-e-commerce-shop' ),
		'description'   => __( 'Appears on blog page sidebar', 'tc-e-commerce-shop' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s p-2 mb-4">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title pt-0 pb-2 mb-2">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'tc-e-commerce-shop' ),
		'description'   => __( 'Appears on page sidebar', 'tc-e-commerce-shop' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s p-2 mb-4">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title pt-0 pb-2 mb-2">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Thid Column Sidebar', 'tc-e-commerce-shop' ),
		'description'   => __( 'Appears on page sidebar', 'tc-e-commerce-shop' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s p-2 mb-4">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title pt-0 pb-2 mb-2">',
		'after_title'   => '</h3>',
	) );

	//Footer widget areas
	$tc_e_commerce_shop_widget_areas = get_theme_mod('tc_e_commerce_shop_footer_widget_layout', '4');
	for ($i=1; $i<=$tc_e_commerce_shop_widget_areas; $i++) {
		register_sidebar( array(
			'name'          => __( 'Footer Nav ', 'tc-e-commerce-shop' ) . $i,
			'id'            => 'footer-' . $i,
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}	
}
add_action( 'widgets_init', 'tc_e_commerce_shop_widgets_init' );

/* Theme Font URL */
function tc_e_commerce_shop_font_url() {
	$font_url = '';
	$font_family = array();
	$font_family[] = 'PT Sans:300,400,600,700,800,900';
	$font_family[] = 'Roboto:400,700';
	$font_family[] = 'Roboto Condensed:400,700';
	$font_family[] = 'Open Sans';
	$font_family[] = 'Overpass';
	$font_family[] = 'Montserrat:300,400,600,700,800,900';
	$font_family[] = 'Playball:300,400,600,700,800,900';
	$font_family[] = 'Alegreya:300,400,600,700,800,900';
	$font_family[] = 'Julius Sans One';
	$font_family[] = 'Arsenal';
	$font_family[] = 'Slabo';
	$font_family[] = 'Lato';
	$font_family[] = 'Overpass Mono';
	$font_family[] = 'Source Sans Pro';
	$font_family[] = 'Raleway';
	$font_family[] = 'Merriweather';
	$font_family[] = 'Droid Sans';
	$font_family[] = 'Rubik';
	$font_family[] = 'Lora';
	$font_family[] = 'Ubuntu';
	$font_family[] = 'Cabin';
	$font_family[] = 'Arimo';
	$font_family[] = 'Playfair Display';
	$font_family[] = 'Quicksand';
	$font_family[] = 'Padauk';
	$font_family[] = 'Muli';
	$font_family[] = 'Inconsolata';
	$font_family[] = 'Bitter';
	$font_family[] = 'Pacifico';
	$font_family[] = 'Indie Flower';
	$font_family[] = 'VT323';
	$font_family[] = 'Dosis';
	$font_family[] = 'Frank Ruhl Libre';
	$font_family[] = 'Fjalla One';
	$font_family[] = 'Oxygen';
	$font_family[] = 'Arvo';
	$font_family[] = 'Noto Serif';
	$font_family[] = 'Lobster';
	$font_family[] = 'Crimson Text';
	$font_family[] = 'Yanone Kaffeesatz';
	$font_family[] = 'Anton';
	$font_family[] = 'Libre Baskerville';
	$font_family[] = 'Bree Serif';
	$font_family[] = 'Gloria Hallelujah';
	$font_family[] = 'Josefin Sans';
	$font_family[] = 'Abril Fatface';
	$font_family[] = 'Varela Round';
	$font_family[] = 'Vampiro One';
	$font_family[] = 'Shadows Into Light';
	$font_family[] = 'Cuprum';
	$font_family[] = 'Rokkitt';
	$font_family[] = 'Vollkorn';
	$font_family[] = 'Francois One';
	$font_family[] = 'Orbitron';
	$font_family[] = 'Patua One';
	$font_family[] = 'Acme';
	$font_family[] = 'Satisfy';
	$font_family[] = 'Josefin Slab';
	$font_family[] = 'Quattrocento Sans';
	$font_family[] = 'Architects Daughter';
	$font_family[] = 'Russo One';
	$font_family[] = 'Monda';
	$font_family[] = 'Righteous';
	$font_family[] = 'Lobster Two';
	$font_family[] = 'Hammersmith One';
	$font_family[] = 'Courgette';
	$font_family[] = 'Permanent Marker';
	$font_family[] = 'Cherry Swash';
	$font_family[] = 'Cormorant Garamond';
	$font_family[] = 'Poiret One';
	$font_family[] = 'BenchNine';
	$font_family[] = 'Economica';
	$font_family[] = 'Handlee';
	$font_family[] = 'Cardo';
	$font_family[] = 'Alfa Slab One';
	$font_family[] = 'Averia Serif Libre';
	$font_family[] = 'Cookie';
	$font_family[] = 'Chewy';
	$font_family[] = 'Great Vibes';
	$font_family[] = 'Coming Soon';
	$font_family[] = 'Philosopher';
	$font_family[] = 'Days One';
	$font_family[] = 'Kanit';
	$font_family[] = 'Shrikhand';
	$font_family[] = 'Tangerine';
	$font_family[] = 'IM Fell English SC';
	$font_family[] = 'Boogaloo';
	$font_family[] = 'Bangers';
	$font_family[] = 'Fredoka One';
	$font_family[] = 'Bad Script';
	$font_family[] = 'Volkhov';
	$font_family[] = 'Shadows Into Light Two';
	$font_family[] = 'Marck Script';
	$font_family[] = 'Sacramento';
	$font_family[] = 'Unica One';

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

/* Theme enqueue scripts */
function tc_e_commerce_shop_scripts() {
	wp_enqueue_style( 'tc-e-commerce-shop-font', tc_e_commerce_shop_font_url(), array() );
	wp_enqueue_style( 'bootstrap-css', esc_url(get_template_directory_uri()).'/css/bootstrap.css' );
	wp_enqueue_style( 'tc-e-commerce-shop-basic-style', get_stylesheet_uri() );
	wp_style_add_data( 'tc-e-commerce-shop-style', 'rtl', 'replace' );
	wp_enqueue_style( 'font-awesome-css', esc_url(get_template_directory_uri()).'/css/fontawesome-all.css' );
	wp_enqueue_style( 'tc-e-commerce-shop-block-style', esc_url(get_template_directory_uri()).'/css/block-style.css' );

		// Paragraph
	    $tc_e_commerce_shop_paragraph_color = get_theme_mod('tc_e_commerce_shop_paragraph_color', '');
	    $tc_e_commerce_shop_paragraph_font_family = get_theme_mod('tc_e_commerce_shop_paragraph_font_family', '');
	    $tc_e_commerce_shop_paragraph_font_size = get_theme_mod('tc_e_commerce_shop_paragraph_font_size', '');
	// "a" tag
		$tc_e_commerce_shop_atag_color = get_theme_mod('tc_e_commerce_shop_atag_color', '');
	    $tc_e_commerce_shop_atag_font_family = get_theme_mod('tc_e_commerce_shop_atag_font_family', '');
	// "li" tag
		$tc_e_commerce_shop_li_color = get_theme_mod('tc_e_commerce_shop_li_color', '');
	    $tc_e_commerce_shop_li_font_family = get_theme_mod('tc_e_commerce_shop_li_font_family', '');
	// H1
		$tc_e_commerce_shop_h1_color = get_theme_mod('tc_e_commerce_shop_h1_color', '');
	    $tc_e_commerce_shop_h1_font_family = get_theme_mod('tc_e_commerce_shop_h1_font_family', '');
	    $tc_e_commerce_shop_h1_font_size = get_theme_mod('tc_e_commerce_shop_h1_font_size', '');
	// H2
		$tc_e_commerce_shop_h2_color = get_theme_mod('tc_e_commerce_shop_h2_color', '');
	    $tc_e_commerce_shop_h2_font_family = get_theme_mod('tc_e_commerce_shop_h2_font_family', '');
	    $tc_e_commerce_shop_h2_font_size = get_theme_mod('tc_e_commerce_shop_h2_font_size', '');
	// H3
		$tc_e_commerce_shop_h3_color = get_theme_mod('tc_e_commerce_shop_h3_color', '');
	    $tc_e_commerce_shop_h3_font_family = get_theme_mod('tc_e_commerce_shop_h3_font_family', '');
	    $tc_e_commerce_shop_h3_font_size = get_theme_mod('tc_e_commerce_shop_h3_font_size', '');
	// H4
		$tc_e_commerce_shop_h4_color = get_theme_mod('tc_e_commerce_shop_h4_color', '');
	    $tc_e_commerce_shop_h4_font_family = get_theme_mod('tc_e_commerce_shop_h4_font_family', '');
	    $tc_e_commerce_shop_h4_font_size = get_theme_mod('tc_e_commerce_shop_h4_font_size', '');
	// H5
		$tc_e_commerce_shop_h5_color = get_theme_mod('tc_e_commerce_shop_h5_color', '');
	    $tc_e_commerce_shop_h5_font_family = get_theme_mod('tc_e_commerce_shop_h5_font_family', '');
	    $tc_e_commerce_shop_h5_font_size = get_theme_mod('tc_e_commerce_shop_h5_font_size', '');
	// H6
		$tc_e_commerce_shop_h6_color = get_theme_mod('tc_e_commerce_shop_h6_color', '');
	    $tc_e_commerce_shop_h6_font_family = get_theme_mod('tc_e_commerce_shop_h6_font_family', '');
	    $tc_e_commerce_shop_h6_font_size = get_theme_mod('tc_e_commerce_shop_h6_font_size', '');
	    $tc_e_commerce_shop_theme_color = get_theme_mod('tc_e_commerce_shop_theme_color', '');


		$tc_e_commerce_shop_custom_css ='
			p,span{
			    color:'.esc_attr($tc_e_commerce_shop_paragraph_color).'!important;
			    font-family: '.esc_attr($tc_e_commerce_shop_paragraph_font_family).';
			    font-size: '.esc_attr($tc_e_commerce_shop_paragraph_font_size).';
			}
			a{
			    color:'.esc_attr($tc_e_commerce_shop_atag_color).'!important;
			    font-family: '.esc_attr($tc_e_commerce_shop_atag_font_family).';
			}
			li{
			    color:'.esc_attr($tc_e_commerce_shop_li_color).'!important;
			    font-family: '.esc_attr($tc_e_commerce_shop_li_font_family).';
			}
			h1{
			    color:'.esc_attr($tc_e_commerce_shop_h1_color).'!important;
			    font-family: '.esc_attr($tc_e_commerce_shop_h1_font_family).'!important;
			    font-size: '.esc_attr($tc_e_commerce_shop_h1_font_size).'!important;
			}
			h2{
			    color:'.esc_attr($tc_e_commerce_shop_h2_color).'!important;
			    font-family: '.esc_attr($tc_e_commerce_shop_h2_font_family).'!important;
			    font-size: '.esc_attr($tc_e_commerce_shop_h2_font_size).'!important;
			}
			h3{
			    color:'.esc_attr($tc_e_commerce_shop_h3_color).'!important;
			    font-family: '.esc_attr($tc_e_commerce_shop_h3_font_family).'!important;
			    font-size: '.esc_attr($tc_e_commerce_shop_h3_font_size).'!important;
			}
			h4{
			    color:'.esc_attr($tc_e_commerce_shop_h4_color).'!important;
			    font-family: '.esc_attr($tc_e_commerce_shop_h4_font_family).'!important;
			    font-size: '.esc_attr($tc_e_commerce_shop_h4_font_size).'!important;
			}
			h5{
			    color:'.esc_attr($tc_e_commerce_shop_h5_color).'!important;
			    font-family: '.esc_attr($tc_e_commerce_shop_h5_font_family).'!important;
			    font-size: '.esc_attr($tc_e_commerce_shop_h5_font_size).'!important;
			}
			h6{
			    color:'.esc_attr($tc_e_commerce_shop_h6_color).'!important;
			    font-family: '.esc_attr($tc_e_commerce_shop_h6_font_family).'!important;
			    font-size: '.esc_attr($tc_e_commerce_shop_h6_font_size).'!important;
			}
			input[type="submit"], .hvr-sweep-to-right:before, .cat-title a.r_button, .woocommerce #respond input#submit.alt,.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,nav.woocommerce-MyAccount-navigation ul li, .footertown input[type="submit"], #comments input[type="submit"].submit, #slider .carousel-control-prev-icon, #slider .carousel-control-next-icon, .more-btn a, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, .pagination a:hover,.page-links a:hover, .pagination .current,.page-links .current, #sidebar ul li::before,#header .nav ul li:hover > ul,#sidebar .tagcloud a:hover{
			    background-color:'.esc_attr($tc_e_commerce_shop_theme_color).';
			}
			#comments a.comment-reply-link,.tags a:hover,.metabox,.primary-navigation ul ul a, .footertown .tagcloud a:hover, .woocommerce-product-search button[type="submit"], .woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, #sidebar input[type="submit"], .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current{
				background-color:'.esc_attr($tc_e_commerce_shop_theme_color).';
			}
			.toggle-menu i,#comments p a,a,span.post-title,.primary-navigation ul ul a:hover,.logo h1 a, .logo p a,.logo p, #our-products .woocommerce ul.products li:hover h2, .footertown .widget h3, #sidebar td#prev a, #sidebar caption, #sidebar td, #sidebar th, #sidebar h3, #header .logo h1 a,section h4, .middle-align .content-aa a, h3.widget-title a,table#wp-calendar a, span.posted_in a, #sidebar .textwidget p a, .primary-navigation ul ul a:hover, .primary-navigation ul li a:hover, .scrollup, .scrollup:focus, .scrollup:hover, .footertown .widget ul li a:hover, #sidebar ul li a:hover, .metabox .entry-date a:hover,.metabox .entry-author a:hover, .copyright a:hover, .more-btn a:hover, .entry-content a, #content-ma a{
			    color:'.esc_attr($tc_e_commerce_shop_theme_color).';
			}
			.primary-navigation ul ul, a.button, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current{
				border-color:'.esc_attr($tc_e_commerce_shop_theme_color).';
			}
			@media screen and (max-width: 1000px){
				.topbar,.email, .call, .sidebar, .side-menu{
					background:'.esc_attr($tc_e_commerce_shop_theme_color).';
				}
			}
		';	

	wp_add_inline_style( 'tc-e-commerce-shop-basic-style',$tc_e_commerce_shop_custom_css );

	require get_parent_theme_file_path( '/tc-style.php' );
	wp_add_inline_style( 'tc-e-commerce-shop-basic-style',$tc_e_commerce_shop_custom_css );

	wp_enqueue_script( 'bootstrap-js', esc_url(get_template_directory_uri()) . '/js/bootstrap.js', array('jquery') );
	wp_enqueue_script( 'tc-e-commerce-shop-customscripts', esc_url(get_template_directory_uri() ). '/js/custom.js', array('jquery') );
	wp_enqueue_script( 'jquery-superfish', esc_url(get_template_directory_uri()) . '/js/jquery.superfish.js', array('jquery') ,'',true);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tc_e_commerce_shop_scripts' );

/*radio button sanitization*/

 function tc_e_commerce_shop_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

/* Excerpt Limit Begin */
function tc_e_commerce_shop_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'tc_e_commerce_shop_loop_columns');
if (!function_exists('tc_e_commerce_shop_loop_columns')) {
	function tc_e_commerce_shop_loop_columns() {
		$columns = get_theme_mod( 'tc_e_commerce_shop_products_per_row', 3 );
		return $columns; // 3 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'tc_e_commerce_shop_shop_per_page', 9 );
function tc_e_commerce_shop_shop_per_page( $cols ) {
  	$cols = get_theme_mod( 'tc_e_commerce_shop_product_per_page', 9 );
	return $cols;
}

function tc_e_commerce_shop_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

// URL DEFINES
define('TC_E_COMMERCE_SHOP_FREE_THEME_DOC',__('https://www.themescaliber.com/demo/doc/free-tc-e-commerce-shop/', 'tc-e-commerce-shop'));
define('TC_E_COMMERCE_SHOP_SUPPORT',__('https://wordpress.org/support/theme/tc-e-commerce-shop', 'tc-e-commerce-shop'));
define('TC_E_COMMERCE_SHOP_REVIEW',__('https://wordpress.org/support/theme/tc-e-commerce-shop/reviews/', 'tc-e-commerce-shop'));
define('TC_E_COMMERCE_SHOP_BUY_NOW',__('https://www.themescaliber.com/themes/multipurpose-ecommerce-wordpress-theme', 'tc-e-commerce-shop'));
define('TC_E_COMMERCE_SHOP_LIVE_DEMO',__('https://www.themescaliber.com/tc-e-commerce-shop', 'tc-e-commerce-shop'));
define('TC_E_COMMERCE_SHOP_PRO_DOC',__('https://themescaliber.com/demo/doc/tc-e-commerce-shop-documentation/', 'tc-e-commerce-shop'));
define('TC_E_COMMERCE_SHOP_SITE_URL',__('https://www.themescaliber.com/themes/ecommerce-shop-wordpress-theme', 'tc-e-commerce-shop'));

function tc_e_commerce_shop_credit_link() {
    echo "<a href=".esc_url(TC_E_COMMERCE_SHOP_SITE_URL)." target='_blank'>".esc_html__('Ecommerce WordPress Theme','tc-e-commerce-shop')."</a>";
}

function tc_e_commerce_shop_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function tc_e_commerce_shop_sanitize_checkbox( $input ) {
	// Boolean check 
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function tc_e_commerce_shop_sanitize_float( $input ) {
    return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

/** Posts navigation. */
if ( ! function_exists( 'tc_e_commerce_shop_post_navigation' ) ) {
	function tc_e_commerce_shop_post_navigation() {
		$tc_e_commerce_shop_pagination_type = get_theme_mod( 'tc_e_commerce_shop_post_navigation_type', 'numbers' );
		if ( $tc_e_commerce_shop_pagination_type == 'numbers' ) {
			the_posts_pagination();
		} else {
			the_posts_navigation( array(
	            'prev_text'          => __( 'Previous page', 'tc-e-commerce-shop' ),
	            'next_text'          => __( 'Next page', 'tc-e-commerce-shop' ),
	            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'tc-e-commerce-shop' ) . ' </span>',
	        ) );
		}
	}
}

/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/* Customizer additions. */
require get_template_directory() . '/inc/customizer.php';

/* Implement the get started page */
require get_template_directory() . '/inc/dashboard/getstart.php';