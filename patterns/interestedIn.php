<?php
/**
 * Title: InterestedIn
 * Slug: theme_ai_center/interestedIn
 * Categories: featured, theme_ai_center/ai-center
 */


function render_post_item ($post, $read_more_html) {
?>
    <a class="card" href="<?php echo(get_permalink($post)); ?>">

        <header>
            <h4><?php echo($post->post_title); ?><br>
        </header>
        <div class="card-content">
            <p><?php echo(get_the_excerpt($post)); ?></p>
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
    
for($i = 0; $i < 3; $i++) {
    ?><div class="col-sm-12 col-3"><?php
    render_post_item(array_shift($query->posts), "Read more");
    ?></div><?php
}
