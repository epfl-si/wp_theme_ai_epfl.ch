<?php

function render_event_item ($link, $image_url, $title, $date, $time, $location, $read_more_html) {
    ?>
        <div class="col-sm-12 col-4">
            <a class="event" href="<?php echo($link); ?>">
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

render_event_item(
    "https://memento.epfl.ch/event/lemanic-life-sciences-hackathon/",
    "/wp-content/uploads/2024/03/lemanic-life-science-hackathon.jpg",
    "Lemanic Life Sciences Hackathon",
    "26-27 Avr. 2024",
    "09:00-21:00",
    "EPFL, Lausanne",
    "Visit epfl.ch"
);

render_event_item(
    "https://memento.epfl.ch/event/5-days-amld-epfl-2024-join-us/",
    "/wp-content/uploads/2024/01/amld.jpg",
    "AMLD EPFL 2024 - Join us!",
    "23-26 Mar. 2024",
    "09:00-19:00",
    "EPFL, Lausanne",
    "Visit epfl.ch"
);

render_event_item(
    "https://memento.epfl.ch/event/ai-center-seminar-series-prof-michael-bronstein/",
    "/wp-content/uploads/2024/01/seminar_prof_michael_bronstein.jpg",
    "AI Center Seminar Series - Prof. Michael Bronstein",
    "01 Feb. 2024",
    "15:30-17:00",
    "EPFL, Lausanne",
    "Visit epfl.ch"
);