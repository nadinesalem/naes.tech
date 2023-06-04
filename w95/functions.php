<?php
// One click theme updates
function w95_theme_updater() {
	require( get_template_directory() . '/updater/theme-updater.php' );
}
add_action( 'after_setup_theme', 'w95_theme_updater' );

// Set the content width based on the theme's design and stylesheet
if ( ! isset( $content_width ) ) {
	$content_width = 580;
}

// Set version constant
define( 'W95_THEME_VERSION', '21.12.23' );

if ( ! function_exists( 'w95_setup' ) ) {
	function w95_setup() {
		// Menus
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'w95' ),
		) );

		// Add theme support
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'custom-background', array(
			'default-color'  => '#008080',
		) );
		add_theme_support( 'custom-logo', array(
			'width'       => 400,
			'height'      => 150,
			'flex-height' => true,
			'flex-width'  => true,
		) );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'post-formats', array( 'video', 'audio' ) );

		// Custom image size for displaying in posts
		add_image_size( 'article', 580, 700, true );

		// Available for translation
		load_theme_textdomain( 'w95', get_template_directory() . '/languages' );
	}
}
add_action( 'after_setup_theme', 'w95_setup' );

// Register widget area

function w95_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'w95' ),
		'id'            => 'sidebar',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget element__frame %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title bar__title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar shop', 'w95' ),
		'id'            => 'sidebar-shop',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget element__frame %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title bar__title">',
		'after_title'   => '</h3>',
	) );
}

add_action( 'widgets_init', 'w95_widgets_init' );

// Enqueue scripts and styles

function w95_scripts() {
	if (is_404())  {
		wp_enqueue_style( 'w95-404-style', get_template_directory_uri() . '/assets/css/404.css', array(), W95_THEME_VERSION, "all" );
	} else  {
		wp_enqueue_style( 'w95-style', get_template_directory_uri() . '/style.css', array(), W95_THEME_VERSION, "all" );
    }

	wp_enqueue_script( 'w95-highlightjs', get_template_directory_uri() . '/assets/js/highlight.pack.js', array('jquery'), W95_THEME_VERSION, true );
	wp_enqueue_script( 'w95-customjs', get_template_directory_uri() . '/assets/js/custom-min.js', array('jquery'), W95_THEME_VERSION, true );
	wp_localize_script( 'w95-ajax', 'ajax', array( 'url' => admin_url( 'admin-ajax.php' ) ) );

	if ( function_exists( 'is_woocommerce' ) ) {
		wp_enqueue_style( 'w95-woocommerce-style', get_template_directory_uri() . '/assets/css/woocommerce-style-min.css', array(), W95_THEME_VERSION);
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'w95_scripts' );

// Add search to main menu

add_filter( 'wp_nav_menu_items', 'brutalist_themes_menu_item', 10, 2 );
function brutalist_themes_menu_item( $items, $args ) {
	if ( ! ( $args->theme_location == 'primary' ) ) {
		return $items;
	}

	return $items . '<li>' . get_search_form( false ) . '</li>';
}

// Add onkeyup on 404 page

add_filter( 'wp_head', 'w95_404_gohome', 10, 2 );
function w95_404_gohome() {
	if ( is_404() ) { ?>
		<script>
		    function pressAnyKeyToContinue() {
			    window.location.href = '<?php echo home_url(); ?>';
		    }
		</script>
	<?php }
}

// REQUIRES & CLASS AUTOLOADING

require_once dirname( __FILE__ ) . '/inc/common.php';
spl_autoload_register( 'brutalistthemes_autoloader' );

// INIT

new brutalistthemes_portfolio;

// Customizer

require get_template_directory() . '/inc/customizer.php';