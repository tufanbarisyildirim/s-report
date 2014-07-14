<?php if ($postTag == 'checkin') {

    // Shout, VenueName, VenueUrl, VenueMapImageUrl, CheckinDate

    $Shout = $data["Shout"];
    $VenueName = $data["VenueName"];
    $VenueUrl = $data["VenueUrl"];
    $VenueMapImageUrl = $data["VenueMapImageUrl"];

    ?>

    <article class="Event <?php echo 'Event--' . $theme; ?>">


        <header class="Event-header">

            <i class="Event-header__icon">
                <svg class="icon <?php echo 'icon--' . $theme; ?>" viewBox="0 0 <?php echo $sizeWeightIcon; ?> <?php echo $sizeHeightIcon; ?>">
                    <use xlink:href="#icon-<?php echo $theme; ?>"></use>
                </svg>
            </i>

            <a href="<?php //echo $Url ?>" target="_blank">

                <time title="<?php the_time('j F Y - G:i') ?>" datetime="<?php the_time('Y-m-dTG:i:s') ?>"><?php echo human_time_diff(get_post_time('U'), current_time('timestamp')) ?> önce</time>

                <strong><?php echo $VenueName ?></strong> mekanında yer bildirimi yaptı;

            </a>
        </header>


        <div class="Event-body">

            <p><?php echo $Shout ?></p>

            <img src="<?php echo $VenueMapImageUrl ?>" alt="<?php echo $VenueName ?>"/>

        </div>


    </article>
<?php } ?>
