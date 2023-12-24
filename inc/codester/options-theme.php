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
  )
));
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
  )
));


// All Catgories
CSF::createSection($prefix, array(
  'title' => __('Catagory content'),
  'id'    =>  'all_catagory-content',
  'fields' => array(array(
    'id'     => 'catagory-reapter-group',
    'type'   => 'repeater',
    'title'       => 'Single Catagories',
    'button_title'       => ' Add Social Profile',
    'fields' => array(
      array(
        'id'    => 'catagory_icon',
        'type'  => 'icon',
        'title' => 'Catagory Icon'
      ),
      array(
        'id'    => 'catagory_title',
        'type'  => 'text',
        'title' => 'Catagory Title'
      ),
      array(
        'id'    => 'catagories-texarea',
        'type'  => 'textarea',
        'title' => 'Catagories Short Discription'
      ),

    )
  ))
));
// Join Area 
CSF::createSection($prefix, array(
  'title' => __('Join Area content'),
  'id'    =>  'all_join-content',
  'fields' => array(
    array(
      'id'    => 'join_title',
      'type'  => 'text',
      'title' => 'Join Area Title'
    ),
    array(
      'id'    => 'join-texarea',
      'type'  => 'textarea',
      'title' => 'Join Area Short Discription'
    ),
    array(
      'id'    => 'join_button_name',
      'type'  => 'text',
      'title' => 'Join Area Button Name',
      'default' => 'join now',
    ),
    array(
      'id'    => 'join_button',
      'type'  => 'text',
      'title' => 'Join Area Button Class',
      'desc' => 'Wright Button class default pos-button.You Can Set Bootstrap Button',
      'default' => 'pos-button',
    ),

  )
));
// single page hero area
CSF::createSection($prefix, array(
  'title' => __('Blog Details Content'),
  'id'    =>  'blog-details-hero',
  'fields' => array(
    array(
      'id'    => 'blog-details-img',
      'type'  => 'media',
      'title' => 'Blog Details Heros Profile Image'
    ),
    array(
      'id'    => 'blog-details-name',
      'type'  => 'text',
      'title' => 'Blog Details Heros Name By Poster',
      'default' => 'Andrew Jonson',
    ),
    array(
      'id'    => 'blog-details-title',
      'type'  => 'text',
      'title' => 'Blog Details Heros Title',
      'default' => 'Step-by-step guide to choosing great font pairs',
    ),
    array(
      'id'    => 'blog-details-post-on',
      'type'  => 'text',
      'title' => 'Blog Details Heros Something Write Before Date',
      'default' => 'Posted on',
    ),
    array(
      'id'    => 'blog-details-date',
      'type'  => 'date',
      'title' => 'Blog Details Heros Posted On Date',
    ),
    array(
      'id'    => 'blog-details-icon',
      'type'  => 'icon',
      'title' => 'Blog Details Heros Icon Set',
    ),
    array(
      'id'    => 'blog-details-catagories',
      'type'  => 'text',
      'title' => 'Blog Details Heros Categories ',
    ),

  )
));
// single page main image
CSF::createSection($prefix, array(
  'title' => __('Blog Details Heading Image'),
  'id'    =>  'blog-details-img',
  'fields' => array(
    array(
      'id'    => 'blog-details-main-img',
      'type'  => 'media',
      'title' => 'Blog Details Main Image'
    ),
  )
));
// single page main image
CSF::createSection($prefix, array(
  'title' => __('Blog Details Next post Title'),
  'id'    =>  'blog-details-next-ttile',
  'fields' => array(
    array(
      'id'    => 'blog-next-post-title',
      'type'  => 'text',
      'title' => 'Blog Details Next Post Title',
      'default' => 'What to read next'
    ),
  )
));


// About us page hero section
CSF::createSection($prefix, array(
  'title' => __('About Page Hero Area'),
  'id'    =>  'about-us-hero-section',
  'fields' => array(
    array(
      'id'    => 'about-us-title-name',
      'type'  => 'text',
      'title' => 'About Page Hero Area Title For page name',
      'default' => 'ABOUT US'
    ),
    array(
      'id'    => 'about-us-title',
      'type'  => 'text',
      'title' => 'About Page Hero Area Title For page Title',
      'default' => 'We are a team of content writers who share their learnings'
    ),
    array(
      'id'    => 'about-us-textarea',
      'type'  => 'textarea',
      'title' => 'About Page Hero Area Content With 40 word',

    ),
  )
));
// About us page Published section BG
CSF::createSection($prefix, array(
  'title' => __('About Page Published Area'),
  'id'    =>  'about-us-published-section',
));
// About us page Published section BG
CSF::createSection($prefix, array(
  'title' => __('About Page Published Area BG'),
  'parent'    =>  'about-us-published-section',
  'fields' => array(
    array(
      'id'    => 'about-us-publishes-bg',
      'type'  => 'media',
      'title' => 'About Page Published Area BG',
    ),
  )
));

// About us page Published section
CSF::createSection($prefix, array(
  'title' => __('About Page Published Area'),
  'parent'    =>  'about-us-published-section',
  'fields' => array(
    array(
      'id'     => 'poston-repeater-published',
      'type'   => 'repeater',
      'title'  => 'All Published Name And Subsciber',
      'fields' => array(

        array(
          'id'    => 'published-number-text',
          'type'  => 'text',
          'title' => 'Published Number'
        ),
        array(
          'id'    => 'about-us-publish-name',
          'type'  => 'text',
          'title' => 'Publihed Name',          
        ),
      )
    ))));

// About us page Mision vission section
CSF::createSection($prefix, array(
  'title' => __('About Page Mission&Vission Area'),
  'parent'    =>  'about-us-published-section',
  'fields' => array(
    array(
      'id'     => 'poston-repeater-mision',
      'type'   => 'repeater',
      'title'  => 'Mission And Vission Area',
      'fields' => array(

        array(
          'id'    => 'about-us-mision-name',
          'type'  => 'text',
          'title' => 'Mission And Vission Name'
        ),
        array(
          'id'    => 'about-us-mision-title',
          'type'  => 'text',
          'title' => 'Mission And Vission Title',          
        ),
        array(
          'id'    => 'about-us-mision-content',
          'type'  => 'textarea',
          'title' => 'Mission And Vission Content',          
        ),
      )
    ))));
