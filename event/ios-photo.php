<?php if ($postTag == 'photo') {

    // PrivatePhotoURL, PublicPhotoURL, AlbumName, TakenDate

    $PublicPhotoURL = $data["PublicPhotoURL"];

    ?>

    <article class="Event <?php echo 'Event--' . $theme; ?>">


        <header class="Event-header">

            <i class="Event-header__icon">
                <svg class="icon <?php echo 'icon--' . $theme; ?>" viewBox="0 0 <?php echo $sizeWeightIcon; ?> <?php echo $sizeHeightIcon; ?>">
                    <use xlink:href="#icon-<?php echo $theme; ?>"></use>
                </svg>
            </i>

            <a href="<?php echo $PublicPhotoURL ?>" target="_blank">

                <time title="<?php the_time('j F Y - G:i') ?>" datetime="<?php the_time('Y-m-dTG:i:s') ?>"><?php echo human_time_diff(get_post_time('U'), current_time('timestamp')) ?> önce</time>

                iPhone 5 ile yeni fotoğraf çekti;

            </a>
        </header>


        <div class="Event-body">

            <img src="<?php echo $PublicPhotoURL ?>" alt=""/>

        </div>


    </article>
<?php } ?>
