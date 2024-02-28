<?php
/**
 * Title: FeaturedNews
 * Slug: theme_ai_center/featuredNews
 * Categories: featured, theme_ai_center/ai-center
 */
?>

<?php
function render_news_item_lg ($title, $image_url, $paragraph_html, $read_more_html) {
    ?>

                <div class="wp-block-group col-sm-12 col-6">
                <a class="wp-block-group news-item-lg">

                    <figure class="wp-block-image"><img src="<?php echo($image_url); ?>" alt="" class="wp-image-21"/></figure>

                    

                    <h3><?php echo($title); ?></h3>

                    

                    <?php echo($paragraph_html); ?>



                    <div class="wp-block-group link">
                    <?php echo($read_more_html); ?>
                    </div>


                </a>
            </div>


    <?php
}
function render_news_item ($title, $paragraph_html, $read_more_html) {
    ?>
               
                <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}, "tagName":"a"} -->
                <a class="wp-block-group news-item">
                    <!-- wp:heading {"level":5} -->
                    <h5><?php echo($title); ?></h5>
                    <!-- /wp:heading -->
                    
                    <!-- wp:paragraph -->
                    <?php echo($paragraph_html); ?>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"layout":{"type":"flex"}} -->
                    <div class="wp-block-group link-sm">
                    <?php echo($read_more_html); ?>
                    </div>
                    <!-- /wp:group --> 

                </a>
                <!-- /wp:group -->
    <?php
}

?>

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group featured-news">
    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group center">
        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group section-header">
            <!-- wp:heading {"level":6} -->
            <h6 class="wp-block-heading">News</h6>
            <!-- /wp:heading -->

            <!-- wp:group {"layout":{"type":"flex"}, "tagName":"a"} -->
            <a class="wp-block-group link">
                <span>Read all news</span>
            </a>
            <!-- /wp:group --> 
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group row">
            <?php
                render_news_item_lg(
                    "A game changer for building robust distributed systems",
                    "http://localhost:8088/wp-content/uploads/2024/01/placeholder-news-1.jpg",
                    "<p>EPFL researchers have developed a new distributed algorithm that, for the first time, solves one of the key performance and reliability problems affecting most of the currently-deployed consensus protocols.</p>",
                    "<span>Read all news</span>"
                );
                // TODO: replace with
                if (false) {
                    $posts = get_posts();
                    render_news_item_lg($posts[0]);
                }
             ?>
            <!-- wp:group -->
            <div class="wp-block-group col-sm-12 col-3">
                <?php
                    render_news_item(
                        "A new EPFL tool shows the decline of political tone in the US",
                        "<p>A new EPFL developed tool, Quotebank, has helped researchers provide the first large-scale data-driven evidence...</p>",
                        "<span>Read on epfl.ch</span>"
                    );
                    render_news_item(
                        "AMLD EPFL 2024 call for workshops",
                        "<p>A new EPFL developed tool, Quotebank, has helped researchers provide the first large-scale data-driven evidence...</p>",
                        "<span>Read on appliedmldays.org</span>"
                    );
                    render_news_item(
                        "A new EPFL tool shows the decline of political tone in the US",
                        "<p>A new EPFL developed tool, Quotebank, has helped researchers provide the first large-scale data-driven evidence...</p>",
                        "<span>Read on epfl.ch</span>"
                    );
                ?>
            </div>
            <!-- /wp:group -->
            
            <!-- wp:group -->
            <div class="wp-block-group col-sm-12 col-3">
                <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}, "tagName":"a"} -->
                <a class="wp-block-group news-item">
                    <!-- wp:heading {"level":5} -->
                    <h5>A new EPFL tool shows the decline of political tone in the US</h5>
                    <!-- /wp:heading -->
                    
                    <!-- wp:paragraph -->
                    <p>A new EPFL developed tool, Quotebank, has helped researchers provide the first large-scale data-driven evidence...</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"layout":{"type":"flex"}} -->
                    <div class="wp-block-group link-sm">
                        <span>Read on epfl.ch</span>
                    </div>
                    <!-- /wp:group --> 

                </a>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}, "tagName":"a"} -->
                <a class="wp-block-group news-item">
                    <!-- wp:heading {"level":5} -->
                    <h5>A new EPFL tool shows the decline of political tone in the US</h5>
                    <!-- /wp:heading -->
                    
                    <!-- wp:paragraph -->
                    <p>A new EPFL developed tool, Quotebank, has helped researchers provide the first large-scale data-driven evidence...</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"layout":{"type":"flex"}} -->
                    <div class="wp-block-group link-sm">
                        <span>Read on epfl.ch</span>
                    </div>
                    <!-- /wp:group --> 

                </a>
                <!-- /wp:group -->

                <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}, "tagName":"a"} -->
                <a class="wp-block-group news-item">
                    <!-- wp:heading {"level":5} -->
                    <h5>A new EPFL tool shows the decline of political tone in the US</h5>
                    <!-- /wp:heading -->
                    
                    <!-- wp:paragraph -->
                    <p>A new EPFL developed tool, Quotebank, has helped researchers provide the first large-scale data-driven evidence...</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"layout":{"type":"flex"}} -->
                    <div class="wp-block-group link-sm">
                        <span>Read on epfl.ch</span>
                    </div>
                    <!-- /wp:group --> 
                </a>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->