<?php

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_action( 'init', 'theme_test_register_pattern_categories' );

function theme_test_register_pattern_categories() {
	register_block_pattern_category( 'theme_test/ai-center', array( 
		'label'       => __( 'AI-Center', 'theme_test' ),
		'description' => __( 'Custom patterns for theme test.', 'theme_test' )
	) );
}