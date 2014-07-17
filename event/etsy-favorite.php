<?php if ($Action[0] == 'favorite') {

    $widthActionIcon = $DomainOption[$Action[0]]['sizeWeightIcon'];
    $heightActionIcon = $DomainOption[$Action[0]]['sizeHeightIcon'];

    // Title, EtsyUrl, ImageUrl, Tags, Price, ShopName, ShopUrl, CreatedAt
    $Title = $Data["Title"];
    $EtsyUrl = $Data["EtsyUrl"];
    $ImageUrl = $Data["ImageUrl"];
    $ShopName = $Data["ShopName"];

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

            <a class="Event-header__time" href="<?php echo $EtsyUrl ?>" target="_blank" title="<?php the_time('j F Y - G:i') ?>">
                <time><?php printf( __( '%s ago', 's-report' ), human_time_diff(get_post_time('U'), current_time('timestamp')) ); ?></time>
            </a>

            <p class="Event-header__text">
                <?php printf( __( 'Faved a product from <strong>%s</strong>\'s shop', 's-report' ), $ShopName ); ?>
            </p>

        </header>

        <div class="Event-body">

            <figure>
                <img src="<?php echo $ImageUrl ?>" alt="<?php echo $Title ?>"/>
                <figcaption><?php echo $Title ?></figcaption>
            </figure>

        </div>

    </article>


<?php } ?>
