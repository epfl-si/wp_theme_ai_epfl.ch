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
		'description' => __( 'Custom patterns for theme test.', 'theme_test' )
	) );
}