<?php

if (! function_exists("render_news_item")) {
    function render_news_item ($link, $title, $paragraph_html, $read_more_html) {
        ?> 
            <a class="news-item" href="<?php echo($link); ?>">
    
                <h5><?php echo($title); ?></h5>
                
                <?php echo($paragraph_html); ?>
    
                <div class="link-sm">
                    <span>
                        <?php echo($read_more_html); ?>
                    </span>
                </div>
            </a>
        <?php
    }    
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
    render_news_item(
        get_permalink($post),
        $post->post_title,
        get_the_excerpt($post),
        "Read on epfl.ch"
    );
} else {
    ?>
    <p>No posts here today!</p>
    <?php
} 
