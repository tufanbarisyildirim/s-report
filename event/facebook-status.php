<?php if ($postTag == 'status') {

    // photoShare
    // From, Message, UpdatedAt

    $From = $data["From"];
    $Message = $data["Message"];
    $UpdatedAt = $data["UpdatedAt"];

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

                durum paylaştı;

            </a>
        </header>


        <div class="Event-body">

            <p><?php echo $Message ?></p>

        </div>


    </article>
<?php } ?>
