<?php get_header(); ?>


    <div class="Page">
        <div class="Events">


            <?php


            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array('paged' => $paged);
            query_posts($args);


            if (have_posts()) : while (have_posts()) : the_post();


                // Post cat name
                $Cat = get_the_category();
                $Domain = $Cat[0]->slug;


                // Post tag
                $PostTags = get_the_tags();
                unset($Action);
                $Action = array();

                if ($PostTags) {
                    foreach ($PostTags as $tag) {
                        array_push($Action, $tag->name);
                    }
                }


                // domain icon size
                include "icon-options.php";

                $widthDomainIcon = $DomainOption[$Domain]['sizeWeightIcon'];
                $heightDomainIcon = $DomainOption[$Domain]['sizeHeightIcon'];


                // Content
                $Data = tokenText(get_the_content());


                // Event
                include "event/instagram.php";
                include "event/facebook.php";
                include "event/foursquare.php";
                include "event/twitter.php";
                include "event/soundcloud.php";
                include "event/vimeo.php";
                include "event/tumblr.php";
                include "event/youtube.php";
                include "event/dribbble.php";
                include "event/imdb.php";
                include "event/instapaper.php";
                include "event/etsy.php";
                include "event/github.php";
                include "event/iphone.php";
                include "event/calendar.php";


            endwhile; ?>

                <div class="nav">
                    <?php next_posts_link(__('Older posts', 's-report')); ?>
                    <?php previous_posts_link(__('Newer posts', 's-report')); ?>
                </div>

            <?php endif; ?>


        </div>
    </div>


<?php get_footer(); ?>