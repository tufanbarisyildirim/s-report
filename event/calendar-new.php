<?php if ($Action[0] == 'new') {

    $Action[0] = 'add';
    $widthActionIcon = $DomainOption[$Action[0]]['sizeWeightIcon'];
    $heightActionIcon = $DomainOption[$Action[0]]['sizeHeightIcon'];

    // Title, Description, Where, Starts, Ends, EventUrl, CreatedAt
    $Title = $Data["Title"];
    $Where = $Data["Where"];
    $Starts = $Data["Starts"];
    $Ends = $Data["Ends"];
    $EventUrl = $Data["EventUrl"];

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

            <a class="Event-header__time" href="<?php echo $EventUrl ?>" target="_blank" title="<?php the_time('j F Y - G:i') ?>">
                <time><?php printf( __( '%s ago', 's-report' ), human_time_diff(get_post_time('U'), current_time('timestamp')) ); ?></time>
            </a>

            <p class="Event-header__text">
                <?php printf( __( 'Added event', 's-report' ), ); ?>
            </p>

        </header>

        <div class="Event-body Event-body--text">

            <p><?php echo $Title ?></p>
            <p class="small"><?php echo $Where ?></p>
            <p class="small"><?php echo $Starts ?> - <?php echo $Ends ?></p>

        </div>

    </article>


<?php } ?>
