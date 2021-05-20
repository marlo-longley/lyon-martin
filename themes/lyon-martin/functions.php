<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( 'twenty-twenty-one-style' ),
        wp_get_theme()->get('Version') // this only works if you have Version in the style header
    );
}


add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register form download block.
        acf_register_block_type(array(
            'name'              => 'form_download_link',
            'title'             => __('Form Download Link'),
            'description'       => __('A link that prompts a download'),
            'render_template'   => 'template-parts/blocks/form-download-link.php',
            'category'          => 'widgets',
        ));

    }
}

/**
 * Register widget area.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @return void
 */
function my_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Latest News', 'lyonmartin' ),
			'id'            => 'sidebar-2',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'lyonmartin' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'my_widgets_init' );

function lyonmartin_setup_theme() {
		add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 75, 75, true ); // default thumbnail size
}
add_action( 'after_setup_theme', 'lyonmartin_setup_theme', 1000 );


// Add custom scripts
function my_scripts_method() {
    wp_enqueue_script(
        'custom-script',
        get_stylesheet_directory_uri() . '/assets/js/faq-collapse.js',
        array( 'jquery' )
    );
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
