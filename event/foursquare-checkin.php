<?php if ($Action[0] == 'checkin') {

    $Action[0] = 'add';
    $widthActionIcon = $DomainOption[$Action[0]]['sizeWeightIcon'];
    $heightActionIcon = $DomainOption[$Action[0]]['sizeHeightIcon'];

    // Shout, VenueName, VenueUrl, VenueMapImageUrl, CheckinDate
    $Shout = $Data["Shout"];
    $VenueName = $Data["VenueName"];
    $VenueUrl = $Data["VenueUrl"];
    $VenueMapImageUrl = $Data["VenueMapImageUrl"];

    ?>


    <article class="Event <?php echo 'Event--' . $Domain; ?>">

        <header class="Event-header">

                <span class="Event-header__icon">
                    <i class="icon <?php echo 'icon--' . $Domain; ?>">
                        <svg class="icon-svg" viewBox="0 0 <?php echo $widthDomainIcon; ?> <?php echo $heightDomainIcon; ?>">
                            <use xlink:href="#icon--<?php echo $Domain; ?>"></use>
                        </svg>
                    </i>
                    <i class="icon <?php echo 'icon--' . $Action[0]; ?>">
                        <svg class="icon-svg" viewBox="0 0 <?php echo $widthActionIcon; ?> <?php echo $heightActionIcon; ?>">
                            <use xlink:href="#icon--<?php echo $Action[0]; ?>"></use>
                        </svg>
                    </i>
                </span>

            <a class="Event-header__time" href="<?php echo $VenueUrl ?>" target="_blank" title="<?php the_time('j F Y - G:i') ?>">
                <time><?php echo human_time_diff(get_post_time('U'), current_time('timestamp')) ?> önce</time>
            </a>

            <p class="Event-header__text">
                yer bildirimi yapti;
            </p>

        </header>

        <div class="Event-body">

            <figure>
                <img src="<?php echo $VenueMapImageUrl ?>" alt="<?php echo $VenueName ?>"/>
                <figcaption><?php echo $Shout ?> @<?php echo $VenueName ?></figcaption>
            </figure>

        </div>

    </article>


<?php } ?>
