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
?>