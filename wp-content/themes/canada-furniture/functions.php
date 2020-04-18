<?php
/**
 * Canada furniture functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Canada_furniture
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'canada_furniture_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function canada_furniture_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Canada furniture, use a find and replace
		 * to change 'canada-furniture' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'canada-furniture', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'canada-furniture' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'canada_furniture_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 148,
			'width'       => 74,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'canada_furniture_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function canada_furniture_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'canada_furniture_content_width', 640 );
}
add_action( 'after_setup_theme', 'canada_furniture_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function canada_furniture_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'canada-furniture' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'canada-furniture' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'canada_furniture_widgets_init' );

function canada_furniture_widgets_footer_1(){
    register_sidebar( array(
		'name'          => esc_html__( 'footer-1', 'canada-furniture1' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'Canada' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'footer-2', 'canada-furniture2' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'Canada' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'footer-3', 'canada-furniture3' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'Canada' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'footer-4', 'canada-furniture4' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'Canada' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'footer-copyright', 'canada-furniture-copyright' ),
		'id'            => 'footer-copyright',
		'description'   => esc_html__( 'Add widgets here.', 'Canada' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
}
add_action( 'widgets_init', 'canada_furniture_widgets_footer_1' );

/**
 * Enqueue scripts and styles.
 */
function canada_furniture_scripts() {
	wp_enqueue_style( 'canada-furniture-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'canada-furniture-style', 'rtl', 'replace' );

	wp_enqueue_script( 'canada-furniture-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'canada-furniture-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'canada_furniture_scripts' );


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';



/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



function create_posttype() {
 
    register_post_type( 'canadfurniture',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Canada Furniture' ),
                'singular_name' => __( 'Canda Furniture' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'canadafurniture'),
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

function canadaFurnitures(){
	$args = array( 'post_type' => 'canadfurniture', 'posts_per_page' => -1,'post_status'     => 'publish' );
	$the_query = new WP_Query( $args ); 
	if ( $the_query->have_posts() ) { ?>
		<div class="row">
		<?php
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
				if (has_post_thumbnail( $post->ID ) ){
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
					$image=$image[0];
				}
			 
		?>
		
			<div class="col-md-4 col-xl-4 col-xs-12">
				<div class="custom-service">
					<div class="service-image">
						<img src="<?php echo $image;?>" />
					</div>
					<div class="service-title">
						<div class="enquire-now">
                            <h2 class="h2" style="display:none;"><?php the_title(); ?></h2>
							<button class="myBtn" data-toggle="modal" data-target="#myModal" onClick="inquire_modal('<?php the_title() ?>')">Enquire Now</button>
						</div>
					</div>
				</div>
			</div>
		
		
		<?php
		//wp_reset_postdata();
		} ?>
		</div>
		<div class="clearfix"></div>
		<!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                  <form id="inquiry_form">
                        <div class="modal-body">
                          
                            <div class="col-row">
                                <div class="col-12">
                                    <input required type="text" placeholder="Name*" name="name" id="name" >
                                    <span id="name-req" style="color:red;"></span>
                                </div>
                            </div>
                            <div class="col-row">
                                <div class="col-12">
                                    <input type="email" placeholder="Email*" id="email" name="email">
                                    <span id="email-req" style="color:red;"></span>
                                </div>
                            </div>
                            <div class="col-row">
                                <div class="col-12">
                                    <input required type="text" placeholder="Phone number*" id="number" name="number" >
                                    <span id="number-req" style="color:red;"></span>
                                    <input type="hidden" name="enq_product" id="enq_product">
                                </div>
                            </div>
                            <div class="col-row">
                                <div class="col-12">
                                    <textarea placeholder="Message" id="message" name="message"></textarea>
                                </div>
                            </div>
                            <div class="col-row">
                                <div class="col-12 text-center">
                                    <button type="submit" class="model-submit">Submit</button>
                                    <button type="button" class="model-cancel" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                        
                        
                       
                    </form>
                </div>
                
              </div>
              
            </div>
          </div>
		<?php
	}
}
add_shortcode('showcanadafurniture', 'canadaFurnitures'); 

add_action("wp_ajax_canada_furniture_enquiry", "send_inquiry_form");
add_action("wp_ajax_nopriv_canada_furniture_enquiry", "send_inquiry_form");

function send_inquiry_form(){
    if($_POST['name'] != '' && $_POST['number'] != ''){
       $body="
		<div style='width:500px;height:600px;background:#eee8e8;padding:20px;'>
			<p><b>Name       : </b>".$_POST['name']."</p>
			<p><b>Email      : </b>".$_POST['email']."</p>
			<p><b>Number     : </b>".$_POST['number']."</p>
			<p><b>Product    : </b>".$_POST['product']."</p>
			<p><b>Message    : </b>".$_POST['message']."</p>
		</div>
        ";
        //$to = get_option('admin_email');
        $to = "support@CanadaFurnithure.com";
        $subject = "CanadaFurnithure Inquiry Email....";
        $headers = array('Content-Type: text/html; charset=UTF-8','from:CanadaFurnithure<no-reply@CanadaFurnithure.com>');
        $sent = wp_mail($to, $subject, $body, $headers);
          if($sent) {
            echo 1;
          }//message sent!
          else  {
            echo 0;
          }//message wasn't sent 
    }else{
        echo 2;
    }
        

	
	exit;
}

function Canada_furniture_logo(){
   
    ?>
    <img src="<?php header_image(); ?>">
    <?php
}

add_shortcode('Canadafurniturelogo', 'Canada_furniture_logo'); 

