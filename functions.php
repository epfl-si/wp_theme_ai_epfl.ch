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
	wp_enqueue_style( 'ai-styles', get_theme_file_uri('style.css') );
}
add_action( 'wp_enqueue_scripts', 'theme_ai_center_setup_styles', 100 );

function add_type_attribute($tag, $handle, $src) {
    // if not your script, do nothing and return original $tag
    if ( 'theme_script' == $handle ) {
		$tag = '<script type="module" src="' . esc_url( $src ) . '"></script>';
        return $tag;
    } 
	else {
        return $tag;
	}
}
add_filter('script_loader_tag', 'add_type_attribute' , 10, 3);

function theme_ai_center_scripts() {
	wp_enqueue_script('theme_script', get_template_directory_uri() . "/assets/js/custom_JS.js");
}
add_action( 'wp_enqueue_scripts', 'theme_ai_center_scripts');

function custom_excerpt_length( $length ) {
	global $specific_excerpt_length;
	return $specific_excerpt_length ? $specific_excerpt_length : 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function custom_ellipsis( $ellipsis ) {
	return '&hellip;';
}
add_filter( 'excerpt_more', 'custom_ellipsis' );

foreach(glob(__DIR__ . '/blocks/*') as $block_dir) {
  if (! register_block_type_from_metadata($block_dir)) {
    die("Unable to register block in $block_dir");
  }
}

function copyToClipboard() {
	?>
		<script>
			document.addEventListener('DOMContentLoaded', function() {
				var copyUrlBtn = document.getElementById('copy-url-btn');
				var currentUrl = window.location.href;
				if (copyUrlBtn) {
					copyUrlBtn.addEventListener('click', function() {
						navigator.clipboard.writeText(currentUrl);
					});
				}
			});
		</script>
	<?php
}
add_action( 'wp_head', 'copyToClipboard' );

function load_favicon(){
?>
<link rel="icon" href="/wp-content/uploads/2024/03/favicon.ico" sizes="any">
<?php
};
add_action('wp_head', 'load_favicon');
