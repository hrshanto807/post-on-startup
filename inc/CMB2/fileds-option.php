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
// athours name for did the post
function posts_authour_page_fileds()
{
    $author_profile = new_cmb2_box(array(
        'id' => 'meta-blog_author_profile',
        'title' => esc_html(__('Blog Posts Author Name', 'hrshanto')),
        'object_types'  => array('poston-author'),

    ));
    // add Field Here
    $author_profile->add_field(array(
        'id' => 'author_role',
        'name' => __('Author Role Name', 'hrshanto'),
        'desc' => __('Input Your Author Role Name'),
        'type' => 'text',
    ));
}

add_action('cmb2_admin_init', 'posts_authour_page_fileds');

// Author Social Link
function poston_teams_fileds()
{
    $teams = new_cmb2_box(array(

        'id'            => 'metabox_attachment_author',
        'title'         => 'Social',
        'object_types'  => ['poston-author'], // Post type
        'priority'      => 'high',
        'show_names'    => true

    ));

    // Autor Social Link
    $teams->add_field(array(
        'id'          => 'social_repeat_group',
        'type'        => 'group',
        'description' => __('You Can Only 4 Social link Add Here', 'biziver'),
        'repeatable'  => true,
        'options'     => array(
            'group_title'       => __('Social {#}', 'biziver'),
            'add_button'        => __('Add Another Social', 'biziver'),
            'remove_button'     => __('Remove Social', 'biziver'),
            'sortable'          => true,
        ),
    ));
    $teams->add_group_field(
        'social_repeat_group',
        array(
            'name' => 'Social Icon Class Name',
            'id'   => 'social_icon',
            'type' => 'faiconselect',
            'options' => array(
                'fab fa-facebook' => 'fa fa-facebook',                
                'fab fa-twitter'     => 'fa fa-twitter',
                'fab fa-instagram' => 'fa-brands fa-instagram',
                'fab fa-linkedin' => 'fa-brands fa-linkedin'
            ),
            'sortable' => true,
            'limit'         => 4,
            'attributes' => array(
                'faver' => 5
            )
        )
    );
    $teams->add_group_field('social_repeat_group', array(
        'name' => 'Social Link',
        'id'   => 'social_link',
        'type' => 'text',
        'sortable' => true,
        'limit'         => 4
    ));
};

add_action('cmb2_admin_init', 'poston_teams_fileds');
