<?php
/**
 * Title: CardDeck
 * Slug: theme_ai_center/cardDeck
 * Categories: featured, theme_ai_center/ai-center
 */
?>

<?php
function render_event_item ($image_url, $title, $date, $time, $location, $read_more_html) {
    ?>
        <div class="col-sm-12 col-4">
            <a class="event" href="#">
                <picture><img src="<?php echo($image_url); ?>" alt=""/></picture>

                <div class="event-content">
                    <header>
                        <h4>
                            <?php echo($title); ?><br>
                            <span class="event-date red"><?php echo($date); ?></span>
                        </h4>    
                        <ul class="event-time-location">
                            <li class="event-time">
                                <i class="ph ph-clock"></i>
                                <span><?php echo($time); ?></span>
                            </li>
                            <li class="event-location">
                                <i class="ph ph-map-pin"></i>
                                <span><?php echo($location); ?></span>
                            </li>
                        </ul>
                    </header>
                    <div class="wp-block-group link-sm">
                        <span><?php echo($read_more_html); ?></span>
                    </div>
                </div>
            </a>
        </div>
    <?php 
}

?>


<div class="card-deck">
    <div class="center">
        <div class="section-header">
            <h6>Events</h6>
            <a class="wp-block-group link">
                <span>Read all news</span>
            </a>
        </div>

        <div class="row">
            <?php
                render_event_item(
                    "http://localhost:8088/wp-content/uploads/2024/01/placeholder-event-1.jpg",
                    "AMLD EPFL 2024",
                    "23-26 Mar. 2024",
                    "09:00-19:00",
                    "EPFL, Lausanne",
                    "Visit appliedmldays.org"
                );
            
                render_event_item(
                    "http://localhost:8088/wp-content/uploads/2024/01/placeholder-event-2.jpg",
                    "Industry Research Workshop: Machine Learning for Health Care and Life Sciences",
                    "23-06 Dec. 2024",
                    "09:00-19:00",
                    "EPFL, Lausanne",
                    "Visit epfl.ch"
                );

                render_event_item(
                    "http://localhost:8088/wp-content/uploads/2024/01/placeholder-event-3.jpg",
                    "Python for Data Science and Machine Learning (EN) 2023",
                    "23-11 Dec. 2024",
                    "09:00-19:00",
                    "EPFL, Lausanne",
                    "Visit epfl.ch"
                );
            ?>
        </div>
    </div>
</div>
