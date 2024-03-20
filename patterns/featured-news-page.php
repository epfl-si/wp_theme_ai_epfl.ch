<?php
/**
 * Title: FeaturedNewsPage
 * Slug: theme_ai_center/featuredNewsPage
 * Categories: featured, theme_ai_center/ai-center
 */

function render_news ($link, $title, $image_html, $paragraph_html, $read_more_html) {
?>
    <a href="<?php echo($link); ?>" class="news">
        <div class="row">
            <div class="col-sm-12 col-5">

                <picture>
                <?php echo($image_html); ?>
                </picture>
            </div>
            <div class="col-sm-12 col-7">
                <div class="news-content">
                    <header>
                        <h3 class="h3"><?php echo($title); ?></h3>
                        <span class="h3 red">14 Nov. 2023</span>
                    </header>

                    <p><?php echo($paragraph_html); ?></p>

                    <div class="link"><span><?php echo($read_more_html); ?></span></div>
                </div>
            </div>
        </div>
    </a>
<?php
}


$args = array(
    'posts_per_page' => -1,
    'orderby'   => array (
    'date' =>'DESC'
)
);

$query = new WP_Query( $args );
$posts = $query->posts;
$post_title = $posts[0]->post_title;


for($i = 0; $i < 10; $i++) {
    $post = array_shift($posts);
    render_news(
        get_permalink($post),
        $post->post_title,
        get_the_post_thumbnail($post),
        get_the_excerpt($post),
        "Read more"
    );

}


