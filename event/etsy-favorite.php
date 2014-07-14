<?php if ($postTag == 'favorite') {

    // Title, EtsyUrl, ImageUrl, Tags, Price, ShopName, ShopUrl, CreatedAt

    $Title = $data["Title"];
    $EtsyUrl = $data["EtsyUrl"];
    $ImageUrl = $data["ImageUrl"];
    $ShopName = $data["ShopName"];

    ?>

    <article class="Event <?php echo 'Event--' . $theme; ?>">


        <header class="Event-header">

            <i class="Event-header__icon">
                <svg class="icon <?php echo 'icon--' . $theme; ?>" viewBox="0 0 <?php echo $sizeWeightIcon; ?> <?php echo $sizeHeightIcon; ?>">
                    <use xlink:href="#icon-<?php echo $theme; ?>"></use>
                </svg>
            </i>

            <a href="<?php echo $EtsyUrl ?>" target="_blank">

                <time title="<?php the_time('j F Y - G:i') ?>" datetime="<?php the_time('Y-m-dTG:i:s') ?>"><?php echo human_time_diff(get_post_time('U'), current_time('timestamp')) ?> önce</time>

                <strong><?php echo $ShopName ?></strong> dükkanından bir ürünü favori listesine ekledi;

            </a>
        </header>


        <div class="Event-body">

            <p><?php echo $Title ?></p>

            <img src="<?php echo $ImageUrl ?>" alt="<?php echo $Title ?>"/>

        </div>


    </article>
<?php } ?>
