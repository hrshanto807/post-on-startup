<?php
function postonstartup_widget_init()
{

    register_sidebar(array(
        'name'    =>   esc_html(__('Main Widget', 'postonstartup')),
        'id'      =>   'sidebar-1',
        'description'    =>    esc_html(__('Widgets in this area will be shown infront your Single Post, before Next Post.', 'postonstartup')),

        'before_widget'    => '<div class="col-xl-4">
        <div class="all-blog-widget-area">',
        'after_widget'    => '</div> </div>',
        'before_title'    => '<div class="single-widget-title"><h2>',
        'after_title'    => '</h2></div>',
        'class' => "widget-catagory-tags-area"
    ));
};
add_action('widgets_init', 'postonstartup_widget_init');
function footer_widget_init()
{

    register_sidebar(array(
        'name'    =>   esc_html(__('footer Widget', 'hrshanto')),
        'id'      =>   'sidebar-2',
        'description'    =>    esc_html(__('Footer Area Mail Form', 'hrshanto')),

        'before_widget'    => '<div class="col-xl-4">
        <div class="all-blog-widget-area">',
        'after_widget'    => '</div> </div>',
        'before_title'    => '<div class="single-widget-title"><h2>',
        'after_title'    => '</h2></div>',
        'class' => "widget-catagory-tags-area"
    ));
};
add_action('widgets_init', 'footer_widget_init');
