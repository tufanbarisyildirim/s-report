<?php


// --------------------------------------------------------
// Translation

load_theme_textdomain('s-report', get_template_directory() . '/languages');


// --------------------------------------------------------
// Auto delete first "Hello Word" post

$autodeletefirst = $wpdb->get_results(
    "
  SELECT *
  FROM $wpdb->posts
  WHERE ID = 1
  "
);

if ($autodeletefirst[0]->post_status == "publish") {
    wp_delete_post(1, false);
}


// --------------------------------------------------------
// Translation


function tokenText($str)
{
    // thx fatih (github.com/f)
    $matches = preg_split("/\;\s*\\$/uism", $str);
    $object = array();
    foreach ($matches as $match) {
        preg_match("/\\$?(\w+)\:(.*)/uism", trim($match), $_matches);
        $object[$_matches[1]] = rtrim($_matches[2], ";");
    }
    return $object;
}

// --------------------------------------------------------
// Infinite scroll

function plugin_scripts()
{
    wp_enqueue_script('plugin-js', get_stylesheet_directory_uri() . '/js/plugin.min.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'plugin_scripts');


// --------------------------------------------------------
// Infinite scroll


function set_infinite_scrolling()
{
    if (is_home()) {
        ?>
        <script type="text/javascript">

            function twttrRender() {
                twttr.widgets.load();
            }

            var inf_scrolling = {
                loading: {
                    img: "<?php echo get_template_directory_uri(); ?>/img/loading-bubbles.svg", // https://github.com/jxnblk/loading
                    msgText: "<?php _e('Loading new posts', 's-report'); ?>",
                    finishedMsg: "<?php _e('All post loaded!', 's-report'); ?>",
                    finished: twttrRender
                },
                "nextSelector": ".nav a:last-child",
                "navSelector": ".nav",
                "itemSelector": ".Event",
                "contentSelector": ".Events",
                bufferPx: 500
            };

            jQuery(inf_scrolling.contentSelector).infinitescroll(inf_scrolling);

        </script>
    <?php } ?>

<?php
}

add_action('wp_footer', 'set_infinite_scrolling', 100);

