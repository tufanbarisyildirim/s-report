<?php if ($postTag == 'favorite') {

    // favorite
    // Title, Description, Url, AuthorName, EmbedCode

    $Title = $data["Title"];
    $AuthorName = $data["AuthorName"];
    $Url = $data["Url"];
    $EmbedCode = $data["EmbedCode"];

    ?>

    <article class="Event <?php echo 'Event--' . $theme; ?>">


        <header class="Event-header">

            <i class="Event-header__icon">
                <svg class="icon <?php echo 'icon--' . $theme; ?>" viewBox="0 0 <?php echo $sizeWeightIcon; ?> <?php echo $sizeHeightIcon; ?>">
                    <use xlink:href="#icon-<?php echo $theme; ?>"></use>
                </svg>
            </i>

            <a href="<?php echo $Url ?>" target="_blank">

                <time title="<?php the_time('j F Y - G:i') ?>" datetime="<?php the_time('Y-m-dTG:i:s') ?>"><?php echo human_time_diff(get_post_time('U'), current_time('timestamp')) ?> önce</time>
                <strong><?php echo $AuthorName ?></strong>'in videosunu favorilere ekledi;

            </a>
        </header>


        <div class="Event-body">

            <!--p><?php //echo $Title ?></p-->

            <?php echo $EmbedCode ?>

            <!--iframe width="100%" height="400" src="//www.youtube.com/embed/K3cx6vHISd8" frameborder="0" allowfullscreen></iframe-->

        </div>


    </article>
<?php } ?>
