<?php
define('POSTONSTARTUP_TEMPLATE_DIR', get_template_directory());
function post_on_genarel_all()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('blog-thumb-img',490,318,true);
    add_image_size('single-blog-thumb-img',1280,582,true);
    add_image_size('author-thumb-img',128,128,true);
    register_nav_menu('poston_main_menu', esc_html(__('Header Menu', 'hrshanto')));
    register_nav_menu('poston_second_menu', esc_html(__('Footer Menu', 'hrshanto')));



};
add_action('after_setup_theme', 'post_on_genarel_all');


// alll enqueue scripts here
function post_on_startup_all_enquue_all()
{
    // style enqueue here
    wp_enqueue_style('bootstrap', get_theme_file_uri('/asset/css/bootstrap.min.css'));
    wp_enqueue_style('fontawesome', get_theme_file_uri('/asset/font-awosome/css/all.min.css'));
    wp_enqueue_style('owl-carousel', get_theme_file_uri('/asset/css/owl.carousel.min.css'));
    wp_enqueue_style('poststylesheet', get_theme_file_uri('/asset/css/style.css'));
    wp_enqueue_style('mobilestylesheet', get_theme_file_uri('/asset/css/mobile.css'));

    // js enque here
    wp_enqueue_script('bootstrap', get_theme_file_uri('/asset/js/bootstrap.bundle.min.js'), array('jquery'), wp_get_theme()->get('Version'), true);

    wp_enqueue_script('owl-cerousel', get_theme_file_uri('/asset/js/owl.carousel.min.js'), array('jquery'), wp_get_theme()->get('Version'), true);

    wp_enqueue_script('post-on-startup-script', get_theme_file_uri('/asset/js/custom.js'), array('jquery'), wp_get_theme()->get('Version'), true);
};
add_action('wp_enqueue_scripts', 'post_on_startup_all_enquue_all');
// A Custom function for get an option
if (!function_exists('postonstart_get_option')) {
    function postonstart_get_option($option = '', $default = null)
    {
        $options = get_option('postonstart_framwork'); // Attention: Set your unique id of the framework
        return (isset($options[$option])) ? $options[$option] : $default;
    }
}

function poston_change_placeholder_title($title)
{
    $post_type = get_post_type();
    if ('poston-author' == $post_type) {
        $title = 'Athour Name';
        return $title;
    };
   
};
add_filter('enter_title_here', 'poston_change_placeholder_title');

function inc_path_faiconselect() {
    return get_template_directory_uri() . '/inc/cmb2-aiconselect'; //Change to correct path.
}

add_filter( 'sa_cmb2_field_faiconselect_asset_path', 'inc_path_faiconselect' );


function poston_allow_tags()
{
    $allow_tags = array(
        'br'  => array(),
    );
    return $allow_tags;
};

// theme includeing option all

require_once POSTONSTARTUP_TEMPLATE_DIR . '/inc/class-wp-bootstrap-navwalker.php';
require_once POSTONSTARTUP_TEMPLATE_DIR . '/inc/CMB2/init.php';
require_once POSTONSTARTUP_TEMPLATE_DIR . '/inc/cmb2-aiconselect/iconselect.php';
require_once POSTONSTARTUP_TEMPLATE_DIR . '/inc/CMB2/fileds-option.php';
require_once POSTONSTARTUP_TEMPLATE_DIR . '/inc/codester/codestar-framework.php';
require_once POSTONSTARTUP_TEMPLATE_DIR . '/inc/codester/options-theme.php';
require_once POSTONSTARTUP_TEMPLATE_DIR . '/inc/widget.php';
require_once POSTONSTARTUP_TEMPLATE_DIR . '/inc/custom.php';


