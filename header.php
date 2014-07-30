<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700&subset=latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"/>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>

    <?php
    //Add your analytics code in that file and uncomment this line
    //include_once("analyticstracking.php");
    ?>

</head>
<body <?php body_class(); ?>>

<?php include 'icon-svg.php'; ?>



<header class="SiteHeader">
    <div class="Content">
        <img class="SiteHeader_avatar" src="<?php echo s_report_get_theme_option('avatar_image', get_template_directory_uri().'/img/avatar.png') ?>" alt="<?php echo s_report_get_theme_option('avatar_alt', 'avatar') ?>"/>

        <h1 class="SiteHeader_title"><?php bloginfo('name'); ?><span class="light"> <?php bloginfo('description'); ?></span></h1>

        <p class="SiteHeader_last-update"><?php _e('Last Update', 's-report'); ?>: <strong><time><?php printf( __( '%s ago', 's-report' ), human_time_diff(get_post_time('U'), current_time('timestamp')) ); ?></time></strong></p>
    </div>
</header>