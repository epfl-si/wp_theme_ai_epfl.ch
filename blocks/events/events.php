<?php

function render_event_item ($event) {
    $date_range = format_event_times(
        $event,
        ["%j %M %y", "%j1–%j2 %M %y", "%j1 %M1 to %j2 %M2 %y",
         "%j1 %M1 %y1 to %j2 %M2 %y2"]);
    ?>
        <div class="col-sm-12 col-4">
            <a class="event" href="<?php echo(get_post_meta($event->ID, "event_url", true)); ?>">
                <picture><img src="<?php echo(get_post_meta($event->ID, "visual_large_url", true)); ?>" alt=""/></picture>

                <div class="event-content">
                    <header>
                        <h4>
                            <?php echo($event->post_title); ?><br>
                            <span class="event-date red"><?php echo($date_range); ?></span>
                        </h4>
                        <?php maybe_render_event_time_and_location($event); ?>
                    </header>
                    <div class="wp-block-group link-sm">
                        <span>Visit epfl.ch</span>
                    </div>
                </div>
            </a>
        </div>
    <?php
}

function maybe_render_event_time_and_location ($event) {
    $start_time = get_post_meta($event->ID, "event_start_time", true);
    $end_time = get_post_meta($event->ID, "event_end_time", true);
    if ($start_time and $end_time) {
        if ($start_time == $end_time) {
            $time = "$start_time";
        } else {
            $time = "$start_time – $end_time";
        }
    } elseif ($start_time) {
        $time = $start_time;
    } else {
        $time = $end_time;  # #hailmarypass
    }

    $location_url = get_post_meta($event->ID, "event_url_place_and_room", true);
    if ($location_url and preg_match('|^https://plan.epfl.ch/|', $location_url)) {
        $location = "EPFL, Lausanne";
    } else {
        $location = get_post_meta($event->ID, "event_place_and_room", true);
    }

    if (! ($time || $location)) { return; }

    ?><ul class="event-time-location"><?php
    if ($time) {
    ?>
      <li class="event-time">
          <i class="ph ph-clock"></i>
          <span><?php echo($time); ?></span>
      </li>
    <?php
    }

    if ($location) {
    ?>
      <li class="event-location">
        <i class="ph ph-map-pin"></i>
        <span><?php echo($location); ?></span>
      </li>
    <?php
    }
                            
    ?></ul><?php
}

$events_query = new WP_Query( array(
    'post_type' => 'epfl-memento',
    'posts_per_page' => 3,
    'meta_key'  => 'api_id',
    'orderby'   => array (
        'meta_value_num' =>'DESC'
    )
));


while($events_query->have_posts()) {
    render_event_item($events_query->next_post());
}
