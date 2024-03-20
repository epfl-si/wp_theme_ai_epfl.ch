<?php
/**
 * Title: Hero
 * Slug: theme_ai_center/hero
 * Categories: featured, theme_ai_center/ai-center
 */

function render_page_title ($title) {
  ?>        
        <div class="center">
            <div class="hero-content">
              <h1><?php echo($title); ?></h1>
            </div>
        </div>
  <?php
}

$uri = $_SERVER['REQUEST_URI'];
$equalsPos = strpos($uri, '=');
if ($equalsPos !== false) {
  $pageId = substr($uri, $equalsPos + 1);
 
  render_page_title (get_the_title($pageId));
} 
         