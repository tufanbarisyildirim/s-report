<?php if ($Action[0] == 'repository') {

    $Action[0] = 'add';
    $widthActionIcon = $DomainOption[$Action[0]]['sizeWeightIcon'];
    $heightActionIcon = $DomainOption[$Action[0]]['sizeHeightIcon'];

    // RepositoryName, RepositoryDescription, RepositoryURL, CloneURL, OwnerUsername, OwnerAvatarURL, CreatedAt
    $RepositoryName = $Data["RepositoryName"];
    $RepositoryURL = $Data["RepositoryURL"];
    $RepositoryDescription = $Data["RepositoryDescription"];

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

            <a class="Event-header__time" href="<?php echo $RepositoryURL ?>" target="_blank" title="<?php the_time('j F Y - G:i') ?>">
                <time><?php echo human_time_diff(get_post_time('U'), current_time('timestamp')) ?> önce</time>
            </a>

            <p class="Event-header__text">
                yeni repo oluşturdu;
            </p>

        </header>

        <div class="Event-body Event-body--text">

            <p><strong><?php echo $RepositoryName ?></strong></p>

            <p class="small"><?php echo $RepositoryDescription ?></small></p>

        </div>

    </article>


<?php } ?>
