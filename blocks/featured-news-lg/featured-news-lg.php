<?php
function render_news_item_lg ($link, $title, $image_html, $paragraph_html, $read_more_html) {
    ?>
        <div class="col-sm-12 col-6">
            <a class="news-item-lg" href="<?php echo($link); ?>">

                <picture>
                <?php echo($image_html); ?>
                </picture>

                <h3><?php echo($title); ?></h3>

                <p><?php echo($paragraph_html); ?></p>

                <div class="link">
                    <span>
                        <?php echo($read_more_html); ?>
                    </span>
                </div>

            </a>
        </div>
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

$post = array_shift($posts);
if ($post) {
    render_news_item_lg (
        get_permalink($post),
        $post->post_title,
        get_the_post_thumbnail($post),
        get_the_excerpt($post),
        "Read all news"
    );
} else {
    ?>
    <p>No posts here today!</p>
    <?php
} 
            