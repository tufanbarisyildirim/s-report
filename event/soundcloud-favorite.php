<?php if ($postTag == 'favorite') {

    // favorite
    // Title, Description, Tags, TrackUrl, Username, UserProfileUrl, ImageUrl, EmbedCode, CreatedAt

    $Title = $data["Title"];
    $Username = $data["Username"];
    $TrackUrl = $data["TrackUrl"];
    $ImageUrl = $data["ImageUrl"];
    $EmbedCode = $data["EmbedCode"];

    ?>

    <article class="Event <?php echo 'Event--' . $theme; ?>">


        <header class="Event-header">

            <i class="Event-header__icon">
                <svg class="icon <?php echo 'icon--' . $theme; ?>" viewBox="0 0 <?php echo $sizeWeightIcon; ?> <?php echo $sizeHeightIcon; ?>">
                    <use xlink:href="#icon-<?php echo $theme; ?>"></use>
                </svg>
            </i>

            <a href="<?php echo $TrackUrl ?>" target="_blank">

                <time title="<?php the_time('j F Y - G:i') ?>" datetime="<?php the_time('Y-m-dTG:i:s') ?>"><?php echo human_time_diff(get_post_time('U'), current_time('timestamp')) ?> önce</time>
                <strong><?php echo $Username ?></strong>'in müziğini favorilere ekledi;

            </a>
        </header>


        <div class="Event-body">

            <!-- p><?php //echo $Title ?></p -->

            <!-- img src="<?php echo $ImageUrl ?>" alt=""/ -->

            <?php echo $EmbedCode ?>

        </div>


    </article>
<?php } ?>
