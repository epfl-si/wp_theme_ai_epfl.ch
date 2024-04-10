<?php
/**
 * Title: FeaturedNewsPage
 * Slug: theme_ai_center/featuredNewsPage
 * Categories: featured, theme_ai_center/ai-center
 */

function render_news ($post, $read_more_html) {
?>
    <a href="<?php echo(get_permalink($post)); ?>" class="news">
        <div class="row">
            <div class="col-sm-12 col-5">

                <picture>
                <?php echo(get_the_post_thumbnail($post)); ?>
                </picture>
            </div>
            <div class="col-sm-12 col-7">
                <div class="news-content">
                    <header>
                        <h3 class="h3"><?php echo($post->post_title); ?></h3>
                        <span class="h3 red"><?php echo(get_the_date('j F, Y', $post)); ?></span>
                    </header>

                    <p><?php echo(get_the_excerpt($post)); ?></p>

                    <div class="link"><span><?php echo($read_more_html); ?></span></div>
                </div>
            </div>
        </div>
    </a>
<?php
}

$query = new WP_Query( array(
    'posts_per_page' => 13,
    'orderby'   => array (
        'date' =>'DESC'
    )));

while($post = array_shift($query->posts)) {
    render_news($post, "Read more");
}
