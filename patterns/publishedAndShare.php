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


<div class="col-sm-12 col-md-4 col-3 article-details">
            <div class="sub-container-sm">
				<h6 class="h6">Published</h6>
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
              <h6 class="h6">Share</h6>
              <ul class="share-options">
                <li><a href="#"><i class="icon ph ph-facebook-logo"><span class="sr-only">Facebook</span></i></a></li>
                <li><a href="#"><i class="icon ph ph-linkedin-logo"><span class="sr-only">LinkedIn</span></i></a></li>
                <li><a href="#"><i class="icon ph ph-twitter-logo"><span class="sr-only">Twitter</span></i></a></li>
                <li><a href="#"><i class="icon ph ph-link-simple"><span class="sr-only">Copy link</span></i></a></li>
              </ul>
            </div>
          </div>


