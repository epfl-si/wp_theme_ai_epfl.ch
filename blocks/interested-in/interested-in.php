<?php

function render_interesting_item($title, $paragraph, $read_more_hmtl) {
    ?>
    <div class="col-sm-12 col-3">
        <a href="#" class="card">
            <header>
                <h4><?php echo($title) ?><br>
            </header>
            <div class="card-content">
                <p><?php echo($paragraph) ?></p>
            <div class="link-sm"><span><?php echo($read_more_hmtl) ?></span><i class="icon ph ph-arrow-up-right"></i></div>
            </div>
        </a>
    </div>
    <?php
}

render_interesting_item (
    "EPFL AI Center Fellowships 2024",
    "Applications for the ETH AI Center PhD and Post-Doc Fellowships are now open!",
    "Learn more"
);
render_interesting_item (
    "EPFL AI Center Fellowships 2024",
    "Applications for the ETH AI Center PhD and Post-Doc Fellowships are now open!",
    "Learn more"
);
render_interesting_item (
    "EPFL AI Center Fellowships 2024",
    "Applications for the ETH AI Center PhD and Post-Doc Fellowships are now open!",
    "Learn more"
);

