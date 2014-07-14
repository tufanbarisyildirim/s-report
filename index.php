<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title></title>

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="stylesheet" type="text/css" href="//cloud.typography.com/6110492/691904/css/fonts.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"/>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<?php include 'icons.php'; ?>

<div class="Page">
    <div class="Events">

        <?php

        $themeOption = array(
            'facebook' => array('sizeWeightIcon' => '11', 'sizeHeightIcon' => '20'),
            'foursquare' => array('sizeWeightIcon' => '19', 'sizeHeightIcon' => '20'),
            'instagram' => array('sizeWeightIcon' => '20', 'sizeHeightIcon' => '20'),
            'twitter' => array('sizeWeightIcon' => '19', 'sizeHeightIcon' => '20'),
            'dribbble' => array('sizeWeightIcon' => '20', 'sizeHeightIcon' => '20'),
            'vine' => array('sizeWeightIcon' => '20', 'sizeHeightIcon' => '20'),
            'behance' => array('sizeWeightIcon' => '23', 'sizeHeightIcon' => '20'),
            'bitbucket' => array('sizeWeightIcon' => '16', 'sizeHeightIcon' => '20'),
            'codepen' => array('sizeWeightIcon' => '20', 'sizeHeightIcon' => '20'),
            'dropbox' => array('sizeWeightIcon' => '20', 'sizeHeightIcon' => '20'),
            'vimeo' => array('sizeWeightIcon' => '20', 'sizeHeightIcon' => '20'),
            'github' => array('sizeWeightIcon' => '19', 'sizeHeightIcon' => '20'),
            'google-plus' => array('sizeWeightIcon' => '19', 'sizeHeightIcon' => '20'),
            'jsfiddle' => array('sizeWeightIcon' => '23', 'sizeHeightIcon' => '20'),
            'youtube' => array('sizeWeightIcon' => '20', 'sizeHeightIcon' => '20'),
            'linkedin' => array('sizeWeightIcon' => '20', 'sizeHeightIcon' => '20'),
            'soundcloud' => array('sizeWeightIcon' => '26', 'sizeHeightIcon' => '20'),
            'spotify' => array('sizeWeightIcon' => '20', 'sizeHeightIcon' => '20'),
            'pinterest' => array('sizeWeightIcon' => '20', 'sizeHeightIcon' => '20'),
            'tumblr' => array('sizeWeightIcon' => '11', 'sizeHeightIcon' => '20'),
            'star' => array('sizeWeightIcon' => '19', 'sizeHeightIcon' => '20'),
            'slac' => array('sizeWeightIcon' => '19', 'sizeHeightIcon' => '20'),
            'stack-overflow' => array('sizeWeightIcon' => '16', 'sizeHeightIcon' => '20'),
            'location' => array('sizeWeightIcon' => '16', 'sizeHeightIcon' => '20'),
            'rss' => array('sizeWeightIcon' => '16', 'sizeHeightIcon' => '20'),
            'etsy' => array('sizeWeightIcon' => '16', 'sizeHeightIcon' => '20'),
            'imdb' => array('sizeWeightIcon' => '16', 'sizeHeightIcon' => '20'),
            'instapaper' => array('sizeWeightIcon' => '16', 'sizeHeightIcon' => '20'),
            'ios' => array('sizeWeightIcon' => '9', 'sizeHeightIcon' => '20'),
            'retweet' => array('sizeWeightIcon' => '21', 'sizeHeightIcon' => '20')
        );


        $args = array('posts_per_page' => 50);
        $myposts = get_posts($args);

        // Post
        foreach ($myposts as $post) : setup_postdata($post);

            // Post cat name
            $cat = get_the_category();
            $theme = $cat[0]->slug;
            $sizeWeightIcon = $themeOption[$theme]['sizeWeightIcon'];
            $sizeHeightIcon = $themeOption[$theme]['sizeHeightIcon'];

            // Post tag
            $posttags = get_the_tags();
            $postTag;
            if ($posttags) {
                foreach ($posttags as $tag) {
                    $postTag = $tag->name;
                }
            }

            // Content
            $data = tokenText(get_the_content());
            //print_r($data);

            // Event
            include "event/instagram.php";
            include "event/facebook.php";
            include "event/foursquare.php";
            include "event/twitter.php";
            include "event/soundcloud.php";
            include "event/vimeo.php";
            include "event/youtube.php";
            include "event/dribbble.php";
            include "event/imdb.php";
            include "event/instapaper.php";
            include "event/etsy.php";
            include "event/github.php";
            include "event/ios.php";

        endforeach;
        wp_reset_postdata();?>


    </div>
</div>


</body>
</html>