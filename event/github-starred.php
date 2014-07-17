<?php if ($Action[0] == 'starred') {

    $Action[0] = 'favorite';
    $widthActionIcon = $DomainOption[$Action[0]]['sizeWeightIcon'];
    $heightActionIcon = $DomainOption[$Action[0]]['sizeHeightIcon'];

    // EntryTitle, EntryUrl, EntryAuthor, EntryContent, EntryImageUrl, EntryPublished, FeedTitle, FeedUrl
    $EntryTitle = $Data["EntryTitle"];
    $EntryUrl = $Data["EntryUrl"];
    $EntryAuthor = $Data["EntryAuthor"];

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

            <a class="Event-header__time" href="<?php echo $EntryUrl ?>" target="_blank" title="<?php the_time('j F Y - G:i') ?>">
                <time><?php printf( __( '%s ago', 's-report' ), human_time_diff(get_post_time('U'), current_time('timestamp')) ); ?></time>
            </a>

            <p class="Event-header__text">
                <?php printf( __( '<strong>%s</strong> starred a repository', 's-report' ), $EntryAuthor ); ?>
            </p>

        </header>

        <div class="Event-body Event-body--text">

            <p><?php echo $EntryTitle ?></p>

        </div>

    </article>


<?php } ?>
