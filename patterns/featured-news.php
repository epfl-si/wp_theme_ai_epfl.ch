<?php
/**
 * Title: FeaturedNews
 * Slug: theme_ai_center/featuredNews
 * Categories: featured, theme_ai_center/ai-center
 */


function render_news_item_lg ($link, $post, $read_more_html) {
    ?>
        <div class="col-sm-12 col-6">
            <a class="news-item-lg" href="<?php echo($link); ?>">

                <picture>
                <?php echo(get_the_post_thumbnail($post)); ?>
                </picture>

                <h3><?php echo($post->post_title); ?></h3>

                <p><?php echo(get_the_excerpt($post)); ?></p>

                <div class="link">
                <?php echo($read_more_html); ?>
                </div>

            </a>
        </div>
    <?php
}
function render_news_item ($post, $read_more_html) {
    global $specific_excerpt_length;
    $specific_excerpt_length = 15;
    $shorter_excerpt = get_the_excerpt($post);
    unset($specific_excerpt_length);

    ?>
        <a class="news-item" href="<?php echo(get_permalink($post)); ?>">

            <h5><?php echo($post->post_title); ?></h5>

            <?php echo($shorter_excerpt); ?>

            <div class="wp-block-group link-sm">
            <?php echo($read_more_html); ?>
            </div>
        </a>
    <?php
}

?>


<?php 

    $query = new WP_Query( array(
        'posts_per_page' => 7,
        'orderby'   => array (
            'date' =>'DESC'
        )
    ));

    $post = array_shift($query->posts);
    if ($post) {
        render_news_item_lg ("news", $post, "<span>Read more</span>");
    } else {
        ?><p>No posts here today!</p><?php
    }

    foreach([0, 1] as $unused_col) {
        ?><div class="col-sm-12 col-3"><?php
              for($i = 0; $i < 3; $i++) {
                      render_news_item(array_shift($query->posts), "<span>Read more</span>");
              }
          ?></div><?php
    }
