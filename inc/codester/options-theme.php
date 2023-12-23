<?php if (!defined('ABSPATH')) {
  die;
} // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = 'postonstart_framwork';

//
// Create options
//
CSF::createOptions($prefix, array(
  'menu_title' => 'Theme Optons',
  'menu_slug'  => 'postonstart-framework',
  'framework_title' => __('Post On Options', 'hrshanto')
));

//
// Create a section

// blog hero post area theme options start
CSF::createSection($prefix, array(
  'title' => __('Blog Hero'),
  'id'    =>  'post-blog-hero',
  'fields' => array(
    // a bg field
    array(
      'title'    => __('Blog Hero BG', 'hrshanto'),
      'id'       => 'blog-hero-bg',
      'type'     => 'media'
    ),
   
    // a bg field
    array(
      'title'    => __('Blog Hero Post Name', 'hrshanto'),
      'id'       => 'blog-hero-name',
      'type'     => 'text'
    ),
     // a bg field
     array(
      'title'    => __('Athour Name', 'hrshanto'),
      'id'       => 'blog-hero-athor',
      'type'     => 'text'
    ),
     // a bg field
     array(
      'title'    => __('Creation Date', 'hrshanto'),
      'id'       => 'blog-hero-date',
      'type'     => 'date'
    ),
    // a bg field
    array(
      'title'    => __('Blog Hero Title', 'hrshanto'),
      'id'       => 'blog-hero-title',
      'type'     => 'text'
    ),
    // a bg field
    array(
      'title'    => __('Blog Hero Content', 'hrshanto'),
      'id'       => 'blog-hero-content',
      'type'     => 'textarea'
    ),
    // a bg field
    array(
      'title'    => __('Blog Hero Thumbnail', 'hrshanto'),
      'id'       => 'blog-hero-thumb',
      'type'     => 'media'
    ),
   

  ),

));
// blog hero post area theme options end

// all title in webSite

CSF::createSection($prefix, array(
  'title' => __('All Title'),
  'id'    =>  'all_title_here',
));
// create a blog  content title
CSF::createSection($prefix, array(
  'title' => __('Blog Content Title'),
  'parent'    =>  'all_title_here',
  'fields' => array(
    // a bg field
    array(
      'title'    => __('Main Title', 'hrshanto'),
      'id'       => 'blog-main-title',
      'type'     => 'text'
    ),
)));
// create a blog  content title
CSF::createSection($prefix, array(
  'title' => __('Catagory Title'),
  'parent'    =>  'all_title_here',
  'fields' => array(
    // a bg field
    array(
      'title'    => __('Catagoery Main Title', 'hrshanto'),
      'id'       => 'blog-sidebar-title',
      'type'     => 'text'
    ),
)));


// All Catgories
CSF::createSection($prefix, array(
  'title' => __('Catagory Title'),
  'id'    =>  'all_title_here',
  'fields' => array(
    // a bg field
    array(
      'title'    => __('Catagoery Main Title', 'hrshanto'),
      'id'       => 'blog-sidebar-title',
      'type'     => 'text'
    ),
)));


