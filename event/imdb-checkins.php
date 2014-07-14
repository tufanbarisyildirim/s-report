<?php if ($postTag == 'checkins') {

    // like
    // EntryTitle, EntryUrl, EntryAuthor, EntryContent, EntryImageUrl, EntryPublished, FeedTitle, FeedUrl

    $EntryTitle = $data["EntryTitle"];
    $EntryUrl = $data["EntryUrl"];
    $EntryAuthor = $data["EntryAuthor"];
    $EntryImageUrl = $data["EntryImageUrl"];

    ?>

    <article class="Event <?php echo 'Event--' . $theme; ?>">


        <header class="Event-header">

            <i class="Event-header__icon">
                <svg class="icon <?php echo 'icon--' . $theme; ?>" viewBox="0 0 <?php echo $sizeWeightIcon; ?> <?php echo $sizeHeightIcon; ?>">
                    <use xlink:href="#icon-<?php echo $theme; ?>"></use>
                </svg>
            </i>

            <a href="<?php echo $EntryUrl ?>" target="_blank">

                <time title="<?php the_time('j F Y - G:i') ?>" datetime="<?php the_time('Y-m-dTG:i:s') ?>"><?php echo human_time_diff(get_post_time('U'), current_time('timestamp')) ?> önce</time>
                İzledigi filmler listesine yeni bir film ekledi;

            </a>
        </header>


        <div class="Event-body">

            <p><?php echo $EntryTitle ?></p>

            <!--img src="<?php //echo $EntryImageUrl ?>" alt=""/-->

        </div>


    </article>
<?php } ?>
