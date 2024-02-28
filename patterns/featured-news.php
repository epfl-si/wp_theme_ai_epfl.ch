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
        <div class="col-sm-12 col-6">
            <a class="news-item-lg">

                <picture>
                <img src="<?php echo($image_url); ?>" alt=""/>
                </picture>

                <h3><?php echo($title); ?></h3>

                <?php echo($paragraph_html); ?>

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


<div class="featured-news">
    <div class="center">
        <div class="section-header">
            <h6>News</h6>
            <a class="link">
                <span>Read all news</span>
            </a>
        </div>

        <div class="row">
            <?php
                render_news_item_lg(
                    "A game changer for building robust distributed systems",
                    "http://localhost:8088/wp-content/uploads/2024/01/placeholder-news-1.jpg",
                    "<p>EPFL researchers have developed a new distributed algorithm that, for the first time, solves one of the key performance and reliability problems affecting most of the currently-deployed consensus protocols.</p>",
                    "<span>Read all news</span>"
                );
                // TODO: replace with
                // if (false) {
                //   $posts = get_posts();
                //    render_news_item_lg($posts[0]);
                // }

             ?>

            <div class="col-sm-12 col-3">
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

            <div class="col-sm-12 col-3">
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
        </div>
    </div>
</div>
