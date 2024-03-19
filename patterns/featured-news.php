<?php
/**
 * Title: FeaturedNews
 * Slug: theme_ai_center/featuredNews
 * Categories: featured, theme_ai_center/ai-center
 */


function render_news_item_lg ($title, $image_html, $paragraph_html, $read_more_html) {
    ?>
        <div class="col-sm-12 col-6">
            <a class="news-item-lg">

                <picture>
                <?php echo($image_html); ?>
                </picture>

                <h3><?php echo($title); ?></h3>

                <p><?php echo($paragraph_html); ?></p>

                <div class="link">
                <?php echo($read_more_html); ?>
                </div>

            </a>
        </div>
    <?php
}
function render_news_item ($title, $paragraph_html, $read_more_html) {
    ?>
        <a class="news-item">

            <h5><?php echo($title); ?></h5>

            <?php echo($paragraph_html); ?>

            <div class="wp-block-group link-sm">
            <?php echo($read_more_html); ?>
            </div>
        </a>
    <?php
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

    $post_title = $posts[0]->post_title;

?>

<div class="featured-news">
    <div class="center">
        <div class="section-header">
            <h6>News</h6>
            <a class="link" href="news">
                <span>Read all news</span>
            </a>
        </div>

        <div class="row">
            <?php
                $post = array_shift($posts);
                if ($post) {
                    render_news_item_lg (
                        $post->post_title,
                        get_the_post_thumbnail($post),
                        get_the_excerpt($post),
                        "<span>Read on epfl.ch</span>"
                    );
                } else {
                    ?>
                    <p>No posts here today!</p>
                    <?php
                }
            ?>
            
            <div class="col-sm-12 col-3">
                <?php
                    for($i = 0; $i < 3; $i++) {
                            global $specific_excerpt_length;
                            $specific_excerpt_length = 15;
                            $post = array_shift($posts);
                            render_news_item(
                                $post->post_title,
                                get_the_excerpt($post),
                                "<span>Read on epfl.ch</span>"
                            );
                            ?>

                            <?php
                            unset($specific_excerpt_length);
                    }
                    
                ?>
            </div>
            <div class="col-sm-12 col-3">
                <?php
                    for($i = 0; $i < 3; $i++) {
                            global $specific_excerpt_length;
                            $specific_excerpt_length = 15;
                            $post = array_shift($posts);
                            render_news_item(
                                $post->post_title,
                                get_the_excerpt($post),
                                "<span>Read on epfl.ch</span>"
                            );
                            ?>

                            <?php
                            unset($specific_excerpt_length);
                    }
                    
                ?>
            </div>
        </div>
    </div>
</div>
