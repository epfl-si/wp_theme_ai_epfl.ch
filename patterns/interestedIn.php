<?php
/**
 * Title: InterestedIn
 * Slug: theme_ai_center/interestedIn
 * Categories: featured, theme_ai_center/ai-center
 */
?>

<?php
function render_interesting_item($title, $paragraph, $read_more_hmtl) {
    ?>
    <a href="#" class="card">
        <header>
            <h4><?php echo($title) ?><br>
        </header>
        <div class="card-content">
            <p><?php echo($paragraph) ?></p>
        <div class="link-sm"><span><?php echo($read_more_hmtl) ?></span><i class="icon ph ph-arrow-up-right"></i></div>
        </div>
    </a>
    <?php
}

?>

<div class="card-deck bg-grey-100">
    <div class="center">
        <div class="section-header">
          <h6>You may also be interested in</h6>
        </div>

        <div class="row">

                <?php
                for($i = 0; $i < 3; $i++) {
                ?>
                    <div class="col-sm-12 col-3">
                    <?php
                    render_interesting_item (
                        "EPFL AI Center Fellowships 2024",
                        "Applications for the ETH AI Center PhD and Post-Doc Fellowships are now open!",
                        "Learn more"
                    );
                    ?>
                    </div>
                    <?php
                }    
                ?>
            </div>
        </div>   
    </div>
</div>
