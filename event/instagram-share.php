<?php if ($Action[0] == 'share') {

    $Action[0] = 'add';
    $widthActionIcon = $DomainOption[$Action[0]]['sizeWeightIcon'];
    $heightActionIcon = $DomainOption[$Action[0]]['sizeHeightIcon'];

    if ($Action[1] == 'photo') {

        // Caption, Url, SourceUrl, CreatedAt, EmbedCode

        $Caption = $Data["Caption"];
        $Url = $Data["Url"];
        $SourceUrl = $Data["SourceUrl"];

        ?>


        <article class="Event <?php echo 'Event--' . $Domain; ?>">

            <header class="Event-header">

                <span class="Event-header__icon">

                    <a href="" class="icon <?php echo 'icon--' . $Domain; ?>">
                        <svg class="icon-svg" viewBox="0 0 <?php echo $widthDomainIcon; ?> <?php echo $heightDomainIcon; ?>">
                            <use xlink:href="#icon--<?php echo $Domain; ?>"></use>
                        </svg>
                    </a>

                    <a href="" class="icon <?php echo 'icon--' . $Action[0]; ?>">
                        <svg class="icon-svg" viewBox="0 0 <?php echo $widthActionIcon; ?> <?php echo $heightActionIcon; ?>">
                            <use xlink:href="#icon--<?php echo $Action[0]; ?>"></use>
                        </svg>
                    </a>

                </span>

                <a class="Event-header__time" href="<?php echo $Url ?>" target="_blank" title="<?php the_time('j F Y - G:i') ?>">
                    <time><?php printf(__('%s ago', 's-report'), human_time_diff(get_post_time('U'), current_time('timestamp'))); ?></time>
                </a>

                <p class="Event-header__text">
                    <?php _e('Added a new photo', 's-report'); ?>
                </p>

            </header>

            <div class="Event-body">

                <figure>
                    <img src="<?php echo $SourceUrl ?>" alt="<?php echo $Caption ?>"/>
                    <figcaption><?php echo $Caption ?></figcaption>
                </figure>

            </div>

        </article>


    <?php
    }

    if ($Action[1] == 'video') {

        // Caption, URL, VideoSourceURL, ImageThumbnailURL, CreatedAt, EmbedCode

        $Caption = $Data["Caption"];
        $URL = $Data["URL"];
        $ImageThumbnailURL = $Data["ImageThumbnailURL"];

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

                <a class="Event-header__time" href="<?php echo $URL ?>" target="_blank" title="<?php the_time('j F Y - G:i') ?>">
                    <time><?php printf(__('%s ago', 's-report'), human_time_diff(get_post_time('U'), current_time('timestamp'))); ?></time>
                </a>

                <p class="Event-header__text">
                    <?php _e('Added a new video', 's-report'); ?>
                </p>


            </header>

            <div class="Event-body">

                <figure>
                    <img src="<?php echo $ImageThumbnailURL ?>" alt="<?php echo $Caption ?>"/>
                    <figcaption><?php echo $Caption ?></figcaption>
                </figure>

            </div>

        </article>


    <?php
    }
} ?>