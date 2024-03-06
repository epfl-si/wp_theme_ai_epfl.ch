<?php
/**
 * Title: PublishedAndShare
 * Slug: theme_ai_center/publishedAndShare
 * Categories: featured, theme_ai_center/ai-center
 */
?>

<?php
function render_published_date ($date) {
	echo ($date);
}
?>

<?php 

	$args = array(
		'posts_per_page' => -1,
		'orderby'   => array (
			'date' =>'DESC'
		)
	);

    $query = new WP_Query( $args );

	$posts = $query->posts;


?>

<?php

function custom_share_buttons() {

	global $post;

	$posts = $query->posts;

	$post_url = urlencode(get_permalink($posts[0]));
	$post_title = urlencode(get_the_title($posts[0]));
	$facebook_url = 'https://www.facebook.com/sharer/sharer.php?u=' . $post_url;
	$linkedin_url = 'https://www.linkedin.com/shareArticle?mini=true&url=' . $post_url . '&title=' . $post_title;
	$twitter_url = 'https://twitter.com/intent/tweet?text=' . $post_title . '&url=' . $post_url;
	?>
		<P><?php echo(get_permalink()); ?></p>
		<!-- <p> <?php debug_print_backtrace(); ?></p> -->
		<li><a href="<?php echo($facebook_url); ?>"><i class="icon ph ph-facebook-logo" target="_blank"><span class="sr-only">Facebook</span></i></a></li>
		<li><a href="<?php echo($linkedin_url); ?>"><i class="icon ph ph-linkedin-logo" target="_blank"><span class="sr-only">LinkedIn</span></i></a></li>
		<li><a href="<?php echo($twitter_url); ?>"><i class="icon ph ph-twitter-logo" target="_blank"><span class="sr-only">Twitter</span></i></a></li>

	<?php
	
	}

?>


<div class="col-sm-12 col-md-4 col-3 article-details">
	<div class="sub-container-sm">
		<h6>Published</h6>
		<p>
			<?php
			$post = array_shift($posts);
			if ($post) {
				render_published_date(get_the_date('j F, Y', $post));
			} else {
				?>
				<p>No posts here today!</p>
				<?php
			} 
			?>
		</p>
	</div>

	<div class="share">
		<h6>Share</h6>
		<ul class="share-options">
		<?php custom_share_buttons(); ?>
		<li><a href="#"><i class="icon ph ph-link-simple"><span class="sr-only">Copy link</span></i></a></li>
		</ul>

	</div>
</div>


