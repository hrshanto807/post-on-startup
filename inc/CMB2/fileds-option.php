<?php 
function poston_blog_post_fileds()
{
    $blog_post = new_cmb2_box(array(
        'id' => 'meta-blog_tag_name',
        'title' => esc_html(__('Bloag Tag Name', 'hrshanto')),
        'object_types'  => array('post'),
        

    ));

    $blog_post->add_field(array(
        'id' => 'blog_tag_name',
        'name' => __('Blog Tag Name', 'hrshanto'),
        'desc' => __('Input Your Post Tag Name. It is Showing Uper the Post Title'),
        'type' => 'text',
    ));
}
add_action('cmb2_admin_init', 'poston_blog_post_fileds');
// athours name for did the post
function posts_authour_name_fileds()
{
    $author_post = new_cmb2_box(array(
        'id' => 'meta-blog_author_name',
        'title' => esc_html(__('Blog Posts Author Name', 'hrshanto')),
        'object_types'  => array('post'),
        

    ));

    $author_post->add_field(array(
        'id' => 'blog_author_name',
        'name' => __('Blog Posts author Name', 'hrshanto'),
        'desc' => __('Input Your Post Authour Name. It is Showing Uper the Post Title'),
        'type' => 'text',
    ));
}
add_action('cmb2_admin_init', 'posts_authour_name_fileds');
?>