<?php if ($Action[0] == 'like') {

    $widthActionIcon = $DomainOption[$Action[0]]['sizeWeightIcon'];
    $heightActionIcon = $DomainOption[$Action[0]]['sizeHeightIcon'];

    if ($Action[1] == 'photo') {

        // Caption, Url, SourceUrl, Username, CreatedAt, EmbedCode
        $Caption = $Data["Caption"];
        $Url = $Data["Url"];
        $SourceUrl = $Data["SourceUrl"];
        $Username = $Data["Username"];

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

                <a class="Event-header__time" href="<?php echo $Url ?>" target="_blank" title="<?php the_time('j F Y - G:i') ?>">
                    <time><?php echo human_time_diff(get_post_time('U'), current_time('timestamp')) ?> önce</time>
                </a>

                <p class="Event-header__text">
                    <strong><?php echo $Username ?></strong>'in fotoğrafını beğendi;
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

        // Caption, URL, VideoSourceURL, ImageThumbnailURL, Username, CreatedAt, EmbedCode
        $Caption = $Data["Caption"];
        $URL = $Data["URL"];
        $ImageThumbnailURL = $Data["ImageThumbnailURL"];
        $Username = $Data["Username"];

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
                    <time><?php echo human_time_diff(get_post_time('U'), current_time('timestamp')) ?> önce</time>
                </a>

                <p class="Event-header__text">
                    <strong><?php echo $Username ?></strong>'in videosunu beğendi;
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