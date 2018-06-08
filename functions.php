<?php 


// FONTS

function wpb_add_google_fonts() {

    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,900', false );

}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

// SCRIPTS

function awsr_script_enqueue() {

    // CSS
    wp_enqueue_style('bootstrap-grid-min', get_template_directory_uri() . '/css/bootstrap-grid.min.css' );
    wp_enqueue_style('bootstrap-reboot-min', get_template_directory_uri() . '/css/bootstrap-reboot.min.css' );
    wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style('theme-css', get_template_directory_uri() . '/style.css' );
    
    // JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-min-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0', 'false');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/awsr.js', array(), '1.0', 'false');


}

add_action('wp_enqueue_scripts', 'awsr_script_enqueue');

// THEME SETUP 

function awsr_theme_setup() {

    add_theme_support('menus');
    register_nav_menu('headermenu', 'Top nav');
    register_nav_menu('footermenu', 'Bottom nav');

}

add_action('init', 'awsr_theme_setup');

// THEME SUPPORT

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'gallery'));

// CUSTOM POST TYPES

function awsr_custom_posts() {

    // Testimonials

    $labels1 = array(
        'name'      => 'Testimonials',
        'singular'  => 'Testimonial',
        'add_new'   => 'Add testimonial',
        'all_items' => 'All testimonials',
    );

    $args1 = array(
        'labels'                => $labels1,
        'public'                => true,
        'has_archive'           => true, 
        'publicly_queryable'    => true,
        'query_var'             => true,
        'rewrite'               => array(
	    'with_front' => false,
	    'slug' => 'testimonial'
	    ),
        'capability_type'       => 'post', // gives default settings of specified
        'hierarchical'          => false, // dependencies on other items
        'supports'               => array( 
            'title',
            'editor',
            'excerpt',
            'thumbnail', // featured image
            'revisions', // automatically saves prior versions
            ), //which parts of the edit screen get shown
        'taxonomies'          =>  array('category', 'post_tags'),
        'menu_position'         =>  6,
        'exclude_from_search'   =>  true,
        );
    
    register_post_type('testimonial', $args1);

        // Writing

        $labels2 = array(
            'name'      => 'Writing',
            'singular'  => 'writing',
            'add_new'   => 'Add writing',
            'all_items' => 'All writing',
        );
    
        $args2 = array(
            'labels'                => $labels2,
            'public'                => true,
            'has_archive'           => true, 
            'publicly_queryable'    => true,
            'query_var'             => true,
            'rewrite'               => array(
            'slug' => 'writing-portfolio',
	        'with_front' => false
	        ),
            'capability_type'       => 'post', // gives default settings of specified
            'hierarchical'          => false, // dependencies on other items
            'supports'               => array( 
                'title',
                'editor',
                'excerpt',
                'thumbnail', // featured image
                'revisions',
                //'custom-fields', // automatically saves prior versions
                ), //which parts of the edit screen get shown
            'taxonomies'          =>  array('category', 'post_tags'),
            'menu_position'         =>  7,
            'exclude_from_search'   =>  false,
            );
    
        register_post_type('writing', $args2);

 // Clients

        $labels3 = array(
            'name'      => 'Clients',
            'singular'  => 'Client',
            'add_new'   => 'Add client',
            'all_items' => 'All clients',
        );
    
        $args3 = array(
            'labels'                => $labels3,
            'public'                => true,
            'has_archive'           => false, 
            'publicly_queryable'    => true,
            'query_var'             => true,
            'rewrite'               => array(
	        'with_front' => false
	        ),
            'capability_type'       => 'post', // gives default settings of specified
            'hierarchical'          => false, // dependencies on other items
            'supports'               => array( 
                'title',
                'editor',
                'excerpt',
                'thumbnail', // featured image
                'revisions', // automatically saves prior versions
                ), //which parts of the edit screen get shown
            'taxonomies'          =>  array('category', 'post_tags'),
            'menu_position'         =>  8,
            'exclude_from_search'   =>  false,
            );
    
        register_post_type('clients', $args3);

 // Web design

        $labels4 = array(
            'name'      => 'Websites',
            'singular'  => 'Website',
            'add_new'   => 'Add website',
            'all_items' => 'All websites',
        );
    
        $args4 = array(
            'labels'                => $labels4,
            'public'                => true,
            'has_archive'           => true, 
            'publicly_queryable'    => true,
            'query_var'             => true,
            'rewrite'               => array(
            'slug' => 'website-portfolio',
	        'with_front' => false
	        ),
            'capability_type'       => 'post', // gives default settings of specified
            'hierarchical'          => false, // dependencies on other items
            'supports'               => array( 
                'title',
                'editor',
                'excerpt',
                'thumbnail', // featured image
                'revisions', // automatically saves prior versions
                ), //which parts of the edit screen get shown
            'taxonomies'          =>  array('category', 'post_tags'),
            'menu_position'         =>  8,
            'exclude_from_search'   =>  false,
            );
    
        register_post_type('websites', $args4);


}

add_action('init', 'awsr_custom_posts');

// GALLERY POST THUMBNAILS

add_image_size( 'small-wide', 720, 405, false);
add_image_size( 'xs-wide', 360, 202, false);

// SIDEBAR 

function awsr_widget_setup() {

    register_sidebar(
        array(
            'name'          => 'Sidebar',
            'id'            => 'sidebar-1',
            'class'         => 'awsr',
            'description'   => 'The AWSR theme sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h1 class="widget-title">',
            'after_title'   => '</h1>'
        )
    );
}

add_action('widgets_init', 'awsr_widget_setup');

//Adding the Open Graph in the Language Attributes
function add_opengraph_doctype( $output ) {
        return $output . ' xmlns:og="https://opengraphprotocol.org/schema/" xmlns:fb="https://www.facebook.com/2008/fbml"';
    }
add_filter('language_attributes', 'add_opengraph_doctype');
 
// FB OG info from a tutorial
 
function insert_fb_in_head() {
    global $post;
    if ( !is_singular()) //if it is not a post or a page
        return;
	echo '<meta property="og:description" content="' . get_the_excerpt() . '"/>';
        echo '<meta property="fb:admins" content="689575211"/>';
        echo '<meta property="og:title" content="' . get_the_title() . '"/>';
        echo '<meta property="og:type" content="article"/>';
        echo '<meta property="og:url" content="' . get_permalink() . '"/>';
        echo '<meta property="og:site_name" content="ChrisLee.is"/>';
    if(!has_post_thumbnail( $post->ID )) { //the post does not have featured image, use a default image
        $default_image="https://chrislee.is/wp-content/uploads/2017/10/bicycle.png"; //replace this with a default image on your server or an image in your media library
        echo '<meta property="og:image" content="' . $default_image . '"/>';
    }
    else{
        $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
        echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>';
    }
    echo "
";
}
add_action( 'wp_head', 'insert_fb_in_head', 5 );

// Here be CMB2 meta boxes

add_action( 'cmb2_admin_init', 'cmb2_writing' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_writing() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_awsr-writing-meta_';

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => 'awsr-writing-info',
		'title'         => __( 'Writing info', 'cmb2' ),
		'object_types'  => array( 'writing', ), // Post type
		'context'       => 'advanced',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Brief
	$cmb->add_field( array(
		'name'       => 'Writing Brief',
		'id'         => 'writing_brief',
		'type'       => 'wysiwyg',
    ) );
    
    // Results
    $cmb->add_field( array(
		'name'       => 'Writing Results',
		'id'         => 'writing_results',
		'type'       => 'wysiwyg',
    ) );

    // Gallery
    $cmb->add_field( array(
		'name'       => 'Writing Gallery',
		'id'         => 'writing_gallery',
		'type'       => 'file_list',
    ) );    

    }
    // Add other metaboxes as needed
   
    
// CMB2 code to retrieve image gallery


function jt_cmb2_file_list_images( $writing_gallery, $img_size = 'xs-wide' ) {
	echo jt_cmb2_get_file_list_images( $writing_gallery, $img_size );
}

function jt_cmb2_get_file_list_images( $writing_gallery, $img_size = 'xs-wide' ) {
	// Get the list of files
	$files = get_post_meta( get_the_ID(), $writing_gallery, 1 );
	$images = '';
	// Loop through them and output an image
	foreach ( (array) $files as $attachment_id => $attachment_url ) {
		$images .= '<div class="col-sm-12 col-md-6 ">';
		$images .= wp_get_attachment_image( $attachment_id, $img_size, false, 'id=awsr-file-list-gallery' );
		$images .= '</div>';
	}
	return $images ? '<div class="row">' . $images . '</div>' : '';
}
