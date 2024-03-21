<?php
/**
 * Title: Hero
 * Slug: theme_ai_center/hero
 * Categories: featured, theme_ai_center/ai-center
 */

function render_page_title ($title, $background_image) {
  ?>        
    <div class="hero" <?php echo($background_image); ?> >
      <div class="center">
          <div class="hero-content">
            <h1><?php echo($title); ?></h1>
          </div>
      </div>
    </div>
  <?php
}

$background_education = "style='background-image: url(/wp-content/uploads/2024/03/image_6.png); background-position: center center; background-repeat: no-repeat; background-size: cover; '";
$background_innovation = "style='background-image: url(/wp-content/uploads/2024/03/image_8.png); background-position: center center; background-repeat: no-repeat; background-size: cover; '";
$background_about = "style='background-image: url(/wp-content/uploads/2024/03/image_2.png); background-position: center center; background-repeat: no-repeat; background-size: cover; '";
$background_research = "style='background-image: url(/wp-content/uploads/2024/03/image_10.png); background-position: center center; background-repeat: no-repeat; background-size: cover; '";
$background_news = "style='background-image: url(/wp-content/uploads/2024/03/image_4.png); background-position: center center; background-repeat: no-repeat; background-size: cover; '";
$background_events = "style='background-image: url(/wp-content/uploads/2024/03/image_7.png); background-position: center center; background-repeat: no-repeat; background-size: cover; '";


$uri = $_SERVER['REQUEST_URI'];
$mySlug = str_replace("/","", $uri);
$title = get_the_title(get_page_by_path( $mySlug ));

if ($mySlug == "education") {
    render_page_title ($title, $background_education);
} else if ($mySlug == "innovation") {
    render_page_title ($title, $background_innovation);
} else if ($mySlug == "about") {
    render_page_title ($title, $background_about);
} else if ($mySlug == "research") {
    render_page_title ($title, $background_research);
} else if ($mySlug == "news") {
    render_page_title ($title, $background_news);
} else if ($mySlug == "events") {
    render_page_title ($title, $background_events);
} else {
    render_page_title ($title, $background_education);
}

