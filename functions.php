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


// --------------------------------------------------------
// Theme Customizations

include_once ABSPATH . 'wp-includes/class-wp-customize-control.php';

class S_Report_Textarea_Custom_Control extends WP_Customize_Control {

  public $type = 'textarea';
  public $statuses;
  public function __construct( $manager, $id, $args = array() ) {

  $this->statuses = array( '' => __( 'Default', 's-report' ) );
    parent::__construct( $manager, $id, $args );
  }

  public function render_content() {
    ?>
    <label>
      <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
      <textarea class="large-text" cols="20" rows="5" <?php $this->link(); ?>>
        <?php echo esc_textarea( $this->value() ); ?>
      </textarea>
    </label>
    <?php
  }
}

function s_report_customize_register( $wp_customize ) {


  // FAVICON 
  $wp_customize->add_setting('s_report_theme_options[favicon]', array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'type' => 'option',
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'favicon', array(
    'label' => __('Site Favicon', 's-report'),
    'section' => 'title_tagline',
    'settings' => 's_report_theme_options[favicon]',
  )));

  // CUSTOM HEADER
  $wp_customize->add_section('s_report_cover_image', array(
    'title'    => __('Cover image', 's-report'),
    'priority' => 50,
  ));

  $wp_customize->add_setting('s_report_theme_options[header_background_image]', array(
    'default' => get_template_directory_uri().'/img/cover.jpg',
    'capability' => 'edit_theme_options',
    'type' => 'option',
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'header_background_image', array(
    'label' => __('Header Image', 's-report'),
    'section' => 's_report_cover_image',
    'settings' => 's_report_theme_options[header_background_image]',
  )));
  
  // CUSTOM AVATAR
  $wp_customize->add_section('s_report_avatar_image', array(
    'title'    => __('Avatar photo', 's-report'),
    'priority' => 60,
  ));

  $wp_customize->add_setting('s_report_theme_options[avatar_image]', array(
    'default' => get_template_directory_uri().'/img/avatar.png',
    'capability' => 'edit_theme_options',
    'type' => 'option',
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'avatar_image', array(
    'label' => __('Avatar Photo', 's-report'),
    'section' => 's_report_avatar_image',
    'settings' => 's_report_theme_options[avatar_image]',
  )));
  
  $wp_customize->add_setting('s_report_theme_options[avatar_alt]', array(
      'default' => 'avatar',
      'capability' => 'edit_theme_options',
      'type' => 'option',
  ));
  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'avatar_alt', array(
    'label'    => __('Alt Text (Name, Description, etc ...)', 's-report'),
    'section'  => 's_report_avatar_image',
    'settings' => 's_report_theme_options[avatar_alt]',
  )));

  // CUSTOM CODE 
  $wp_customize->add_section('s_report_custom_code', array(
    'title'    => __('Custom Code', 's-report'),
    'priority' => 200,
  ));

  $wp_customize->add_setting('s_report_theme_options[header_code]', array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'type' => 'option',
  ));
  $wp_customize->add_control( new S_Report_Textarea_Custom_Control($wp_customize, 'header_code', array(
    'label'    => __('Header Code (Meta tags, CSS, etc ...)', 's-report'),
    'section'  => 's_report_custom_code',
    'settings' => 's_report_theme_options[header_code]',
  )));
  
  $wp_customize->add_setting('s_report_theme_options[footer_code]', array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'type' => 'option',
  ));
  $wp_customize->add_control( new S_Report_Textarea_Custom_Control($wp_customize, 'footer_code', array(
    'label'    => __('Footer Code (Analytics, etc ...)', 's-report'),
    'section'  => 's_report_custom_code',
    'settings' => 's_report_theme_options[footer_code]'
  )));
}
add_action( 'customize_register', 's_report_customize_register' );

/**
 * Get Theme options
 */
function s_report_get_theme_option( $option_name, $default = false ) {
  $options = get_option( 's_report_theme_options' );
  if( isset($options[$option_name]) && ! empty( $options[$option_name] ) ) {
    return $options[$option_name];
  }
  return $default; 
}

/**
 * Header code
 */
if( ! function_exists('header_code') ) {
  function header_code(){
    $header_code = s_report_get_theme_option('header_code');
    if ($header_code) {
      echo $header_code;
    }
  }
  add_action( 'wp_head', 'header_code' );
}

/**
 * Footer code
 */
if( ! function_exists('footer_code') ) {
  function footer_code(){
    $footer_code = s_report_get_theme_option('footer_code');
    if ($footer_code) {
      echo $footer_code;
    }
  }
  add_action( 'wp_footer', 'footer_code' );
}

/**
 * Favicon
 */
function s_report_favicon(){
  $favicon = s_report_get_theme_option('favicon');
  if ($favicon) {
    echo '<link rel="shortcut icon" href="'.$favicon.'">';
  }
}
add_action( 'wp_head', 's_report_favicon' );

/**
 * Custom Header
 */
function s_report_custom_header() {
  $header_image = s_report_get_theme_option('header_background_image');
    ?>
    <style type="text/css" media="screen">
    <?php if ( $header_image ) { ?>
    .SiteHeader {
      background-image: url(<?php echo $header_image ?>);
    }
    <?php } ?>

    </style>    
    <?php
}
add_action( 'wp_head', 's_report_custom_header' );
// --------------------------------------------------------
// Theme Customizations
