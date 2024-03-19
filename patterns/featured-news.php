<?php
/**
 * Title: FeaturedNews
 * Slug: theme_ai_center/featuredNews
 * Categories: featured, theme_ai_center/ai-center
 */
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
            <!-- wp:theme-ai-center/featured-news-lg /-->

            <?php
                for($i = 0; $i < 2; $i++) {
                    ?>
                    <div class="col-sm-12 col-3">
                    <?php
                        for($j = 0; $j < 3; $j++) {
                            global $specific_excerpt_length;
                            $specific_excerpt_length = 15;
                            $post = array_shift($posts);
                            ?>
                            <!-- wp:theme-ai-center/featured-news /-->
                            <?php
                            unset($specific_excerpt_length);
                        }
                    ?>
                    </div>
                    <?php
                }
            ?>


            
        </div>
    </div>
</div>
