<?php

if (! function_exists("render-post-title")) {
    function render_post_title ($title) {
        ?> 
            <li>
                <?php echo($title); ?>
            </li>

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
    render_post_title(
        $post->post_title
    );
}  
