<?php if ($postTag == 'repository') {

    // RepositoryName, RepositoryDescription, RepositoryURL, CloneURL, OwnerUsername, OwnerAvatarURL, CreatedAt

    $RepositoryName = $data["RepositoryName"];
    $RepositoryURL = $data["RepositoryURL"];
    $RepositoryDescription = $data["RepositoryDescription"];

    ?>

    <article class="Event <?php echo 'Event--' . $theme; ?>">


        <header class="Event-header">

            <i class="Event-header__icon">
                <svg class="icon <?php echo 'icon--' . $theme; ?>" viewBox="0 0 <?php echo $sizeWeightIcon; ?> <?php echo $sizeHeightIcon; ?>">
                    <use xlink:href="#icon-<?php echo $theme; ?>"></use>
                </svg>
            </i>

            <a href="<?php echo $RepositoryURL ?>" target="_blank">

                <time title="<?php the_time('j F Y - G:i') ?>" datetime="<?php the_time('Y-m-dTG:i:s') ?>"><?php echo human_time_diff(get_post_time('U'), current_time('timestamp')) ?> önce</time>

                yeni repo oluşturdu;

            </a>
        </header>


        <div class="Event-body">

            <p><?php echo $RepositoryName ?></p>
            <p><small><?php echo $RepositoryDescription ?></small></p>

        </div>


    </article>
<?php } ?>
