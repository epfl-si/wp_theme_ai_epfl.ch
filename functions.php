<?php

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_action( 'init', 'theme_ai_center_register_pattern_categories' );

function theme_ai_center_register_pattern_categories() {
	register_block_pattern_category( 'theme_ai_center/ai-center', array( 
		'label'       => __( 'AI-Center', 'theme_ai_center' ),
		'description' => __( 'Custom patterns for theme test.', 'theme_ai_center' )
	) );
}

/*  DISABLE GUTENBERG STYLE IN HEADER| WordPress 5.9 */
function theme_ai_center_setup_styles() {
    wp_dequeue_style( 'global-styles' );
	wp_enqueue_style( 'load-phosphor-icons', 'https://unpkg.com/@phosphor-icons/web@2.0.3/src/regular/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_ai_center_setup_styles', 100 );


