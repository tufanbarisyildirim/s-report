<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700&subset=latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"/>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>

    <?php include_once("analyticstracking.php"); ?>

</head>
<body <?php body_class(); ?>>

<?php include 'icon-svg.php'; ?>




<header class="SiteHeader">
    <div class="Width">

        <div class="HeaderContent">

            <div class="line">
                <div class="dot"></div>
            </div>


            <div class="site-info">
                <img class="site-info_photo" src="<?php echo s_report_get_theme_option('avatar_image', get_template_directory_uri() . '/img/avatar.png') ?>"
                     alt="<?php echo s_report_get_theme_option('avatar_alt', 'avatar') ?>"/>

                <h1 class=" site-info_name"><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></h1>
                <?php _e('Last Update', 's-report'); ?>:
                <time><?php printf(__('%s ago', 's-report'), human_time_diff(get_post_time('U'), current_time('timestamp'))); ?></time>
            </div>

        </div>

    </div>
</header>