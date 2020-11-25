<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20 );


 /**
 * Disable Google Fonts.
 */
add_filter( 'elementor/frontend/print_google_fonts', '__return_false' );


 /**
 * Add Font Group.
 */
add_filter( 'elementor/fonts/groups', function( $font_groups ) {
	$font_groups['FARSI'] = __( 'فونت فارسی' );
	$font_groups['English'] = __( 'فونت انگلیسی' );
	return $font_groups;
} );


/**
 * Add Fonts.
 */
add_filter( 'elementor/fonts/additional_fonts', function( $additional_fonts ) {
	//Font name/font group
	$additional_fonts['Anjoman'] = 'FARSI';
	// $additional_fonts['AnjomanFN'] = 'FARSI';
	$additional_fonts['Aviny'] = 'FARSI';
	$additional_fonts['Artin'] = 'FARSI';
	$additional_fonts['Daal'] = 'FARSI';
	$additional_fonts['Damavand'] = 'FARSI';
	$additional_fonts['Dana'] = 'FARSI';
	$additional_fonts['DanaFN'] = 'FARSI';
	$additional_fonts['Emkan'] = 'FARSI';
	// $additional_fonts['Estedad'] = 'FARSI';
	// $additional_fonts['EstedadFN'] = 'FARSI';
	$additional_fonts['Farhang'] = 'FARSI';
	$additional_fonts['FarhangFN'] = 'FARSI';
	$additional_fonts['Gandom'] = 'FARSI';
	$additional_fonts['Irancell'] = 'FARSI';
	$additional_fonts['IRANSans'] = 'FARSI';
	$additional_fonts['IRANSansDN'] = 'FARSI';
	$additional_fonts['IRANSansDNFN'] = 'FARSI';
	$additional_fonts['IRANSansFN'] = 'FARSI';
	$additional_fonts['IRANYekan'] = 'FARSI';
	$additional_fonts['IRANYekanFN'] = 'FARSI';
	$additional_fonts['Mikhak'] = 'FARSI';
	$additional_fonts['Kalameh'] = 'FARSI';
	$additional_fonts['Katibeh'] = 'FARSI';
	$additional_fonts['Maneli'] = 'FARSI';
	$additional_fonts['Nahid'] = 'FARSI';
	$additional_fonts['Noora'] = 'FARSI';
	$additional_fonts['NooraFN'] = 'FARSI';
	$additional_fonts['Parastoo'] = 'FARSI';
	$additional_fonts['Sahel'] = 'FARSI';
	$additional_fonts['Samim'] = 'FARSI';
	$additional_fonts['Shabnam'] = 'FARSI';
	$additional_fonts['ShabnamFN'] = 'FARSI';
	$additional_fonts['Tanha'] = 'FARSI';
	$additional_fonts['TanhaFN'] = 'FARSI';
	$additional_fonts['Vazir'] = 'FARSI';
	$additional_fonts['VazirFN'] = 'FARSI';
	// $additional_fonts['Yekanbakh'] = 'FARSI';
	$additional_fonts['Roboto'] = 'English';
	$additional_fonts['Open Sans'] = 'English';
	$additional_fonts['Oswald'] = 'English';
	$additional_fonts['Montserrat'] = 'English';
	$additional_fonts['Lato'] = 'English';
	$additional_fonts['Annie Use Your Telescope'] = 'English';
	return $additional_fonts;
} );


/**
 * Load custom wp admin style.
 */
function hello_elementor_child_load_custom_wp_admin_style(){
	wp_register_style( 'custom_wp_admin_css', get_stylesheet_directory_uri() . '/style.css', false, '1.0.0' );
	wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action('admin_enqueue_scripts', 'hello_elementor_child_load_custom_wp_admin_style');


/**
 * Add a sidebar.
 */
function hello_elementor_child_widgets_init() {
	register_sidebar( array(
			'name'          => __( 'نوار کناری', 'hello elementor child' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'ویجت های این قسمت در تمامی صفحات نمایش داده می شوند.', 'hello elementor child' ),
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget'  => '</li>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'hello_elementor_child_widgets_init' );

/**
 * Load translation files.
 */
// function hello_elementor_child_locale() {
// 	load_child_theme_textdomain( 'total', get_stylesheet_directory() . '/languages' );
// }
// add_action( 'after_setup_theme', 'hello_elementor_child_locale' );