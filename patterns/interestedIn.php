<?php
/**
 * Title: InterestedIn
 * Slug: theme_ai_center/interestedIn
 * Categories: featured, theme_ai_center/ai-center
 */


function render_post_item ($link, $title, $paragraph_html, $read_more_html) {
?>
    <a class="card" href="<?php echo($link); ?>">

        <header>
            <h4><?php echo($title) ?><br>
        </header>
        <div class="card-content">
            <p><?php echo($paragraph_html) ?></p>
            <div class="link-sm">
                <span>
                    <?php echo($read_more_html) ?>
                </span>
                <i class="icon ph ph-arrow-up-right"></i>
            </div>
        </div>                                  
    </a>
<?php
}


$query = new WP_Query( array(
    'posts_per_page' => 3,
    'orderby'   => array (
        'date' =>'DESC'
    )
));
$posts = $query->posts;



    
    for($i = 0; $i < 3; $i++) {
        ?>
        <div class="col-sm-12 col-3">
        <?php
        $post = array_shift($posts);
        render_post_item(
            get_permalink($post),
            $post->post_title,
            get_the_excerpt($post),
            "Read more"
        );
        ?>
        </div>
    <?php
    }
