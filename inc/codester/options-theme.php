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
// create author title
CSF::createSection($prefix, array(
  'title' => __('Author Post Title'),
  'parent'    =>  'all_title_here',
  'fields' => array(
    // a bg field
    array(
      'title'    => __('Author Post', 'hrshanto'),
      'id'       => 'author-blog-main-title',
      'type'     => 'text'
    ),
  )
));
// create featured title
CSF::createSection($prefix, array(
  'title' => __('Featured Post Title'),
  'parent'    =>  'all_title_here',
  'fields' => array(
    // a bg field
    array(
      'title'    => __('Featured Post', 'hrshanto'),
      'id'       => 'featurd-blog-main-title',
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
    )
  )
));

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
    )
  )
));

//Author page hero section
CSF::createSection($prefix, array(
  'title' => __('Author Page Hero Area'),
  'id'    =>  'Author-hero-section',
  'fields' => array(
    array(
      'id'    => 'author-hero-bg',
      'type'  => 'media',
      'title' => 'Author Bacground Image',
    ),
    array(
      'id'    => 'author-profile-img',
      'type'  => 'media',
      'title' => 'Author Image',
    ),
    array(
      'id'    => 'author-us-title',
      'type'  => 'text',
      'title' => 'Author Page Hero Area Title For page Title',
      'default' => 'Hey there, I’m Andrew Jonhson and welcome to my Blog'
    ),
    array(
      'id'    => 'author-textarea',
      'type'  => 'textarea',
      'title' => 'Author Page Hero Area Content With 40 word',
      'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non blandit massa enim nec. Scelerisque viverra mauris in aliquam sem. At risus viverra adipiscing at in tellus.',

    ),
    array(
      'id'     => 'poston-repeater-social',
      'type'   => 'repeater',
      'title'  => 'Author Social Link',
      'fields' => array(
        array(
          'id'    => 'author-social-icon',
          'type'  => 'icon',
          'title' => 'Author Social Icon'
        ),
        array(
          'id'    => 'author-social-link',
          'type'  => 'text',
          'title' => 'Author Social Link'
        ),

      )
    )
  )
));
// author headeing Title
CSF::createSection($prefix, array(
  'title' => __('List Of Author Title'),
  'id'    =>  'author-list-title',
  'fields' => array(
    array(
      'id'    => 'author-list-tittle',
      'type'  => 'text',
      'title' => 'Author Title Set',
      'default' => 'List of Authors'
    ),
  )
));

// home page hero section
CSF::createSection($prefix, array(
  'title' => __('Home Hero'),
  'id'    =>  'post-home-hero',
  'fields' => array(
    // a bg field
    array(
      'title'    => __('Home Hero BG', 'hrshanto'),
      'id'       => 'home-hero-bg',
      'type'     => 'media'
    ),

    // a bg field
    array(
      'title'    => __('Home Hero Post On', 'hrshanto'),
      'id'       => 'home-hero-name',
      'type'     => 'text'
    ),
    // a bg field
    array(
      'title'    => __('Home Hero Catagories Name', 'hrshanto'),
      'id'       => 'home-hero-catagories ',
      'type'     => 'text'
    ),
    // a bg field
    array(
      'title'    => __('Athour Name', 'hrshanto'),
      'id'       => 'home-hero-athor',
      'type'     => 'text'
    ),
    // a bg field
    array(
      'title'    => __('Creation Date', 'hrshanto'),
      'id'       => 'home-hero-date',
      'type'     => 'date'
    ),
    // a bg field
    array(
      'title'    => __('Home Hero Title', 'hrshanto'),
      'id'       => 'home-hero-title',
      'type'     => 'text'
    ),
    // a bg field
    array(
      'title'    => __('Home Hero Content', 'hrshanto'),
      'id'       => 'home-hero-content',
      'type'     => 'textarea'
    ),
    // a bg field
    array(
      'title'    => __('Home Hero Button Class', 'hrshanto'),
      'id'       => 'home-hero-button-class',
      'type'     => 'text'
    ),

    // a bg field
    array(
      'title'    => __('Home Hero Button Link', 'hrshanto'),
      'id'       => 'home-hero-link',
      'type'     => 'text'
    ),
    array(
      'title'    => __('Home Hero Button Name', 'hrshanto'),
      'id'       => 'home-hero-name-button',
      'type'     => 'text'
    ),
    array(
      'title'    => __('Home Hero Button Icon', 'hrshanto'),
      'id'       => 'home-hero-icon',
      'type'     => 'icon'
    ),


  ),

));

// fetrud area
CSF::createSection($prefix, array(
  'title' => __('Featured Post'),
  'id'    =>  'post-home-hero',
  'fields' => array(
    // a bg field
    array(
      'title'    => __('Featured Post Image', 'hrshanto'),
      'id'       => 'fetured-img',
      'type'     => 'media'
    ),

    // a bg field
    array(
      'title'    => __('Athour Name', 'hrshanto'),
      'id'       => 'featured-post-athor',
      'type'     => 'text'
    ),
    // a bg field
    array(
      'title'    => __('Creation Date', 'hrshanto'),
      'id'       => 'featured-post-date',
      'type'     => 'date'
    ),
    // a bg field
    array(
      'title'    => __('Home Hero Title', 'hrshanto'),
      'id'       => 'featured-post-title',
      'type'     => 'text'
    ),
    // a bg field
    array(
      'title'    => __('Home Hero Content', 'hrshanto'),
      'id'       => 'featured-post-content',
      'type'     => 'textarea'
    ),
    // a bg field
    array(
      'title'    => __('Home Hero Button Class', 'hrshanto'),
      'id'       => 'featured-post-button-class',
      'type'     => 'text'
    ),

    // a bg field
    array(
      'title'    => __('Home Hero Button Link', 'hrshanto'),
      'id'       => 'featured-post-link',
      'type'     => 'text'
    ),
    array(
      'title'    => __('Home Hero Button Name', 'hrshanto'),
      'id'       => 'featured-post-name-button',
      'type'     => 'text'
    ),
    array(
      'title'    => __('Home Hero Button Icon', 'hrshanto'),
      'id'       => 'featured-post-icon',
      'type'     => 'icon'
    ),


  ),

));

// About us page Mision vission section
CSF::createSection($prefix, array(
  'title' => __('Home Page about Us & Mission Area'),
  'id'    =>  'home-about-us-section',
));
CSF::createSection($prefix, array(
  'title' => __('Home Page about Us Area'),
  'parent'    =>  'home-about-us-section',
  'fields' => array(
    array(
      'id'    => 'home-about-us-name',
      'type'  => 'text',
      'title' => 'About Us Name'
    ),
    array(
      'id'    => 'home-about-us-title',
      'type'  => 'text',
      'title' => 'About Us Title',
    ),
    array(
      'id'    => 'home-about-us-content',
      'type'  => 'textarea',
      'title' => 'About Us Content',
    ),
  )
));

// About us page Mision vission section
CSF::createSection($prefix, array(
  'title' => __('Home Page Mission Area'),
  'parent'    =>  'home-about-us-section',
  'fields' => array(
    array(
      'id'    => 'home-about-us-mision-name',
      'type'  => 'text',
      'title' => 'Mission And Vission Name'
    ),
    array(
      'id'    => 'home-about-us-mision-title',
      'type'  => 'text',
      'title' => 'Mission And Vission Title',
    ),
    array(
      'id'    => 'home-about-us-mision-content',
      'type'  => 'textarea',
      'title' => 'Mission And Vission Content',
    ),
  )
));
// Satartup Section
CSF::createSection($prefix, array(
  'title' => __('Home Page Startup Area'),
  'id'    =>  'home-startup-section',
  'fields' => array(
    array(
      'id'    => 'home-start-up-img',
      'type'  => 'media',
      'title' => 'StartUp Area Img'
    ),
    array(
      'id'    => 'home-start-up-name',
      'type'  => 'text',
      'title' => 'StartUp Area Name'
    ),
    array(
      'id'    => 'home-start-up-title',
      'type'  => 'text',
      'title' => 'StartUp Area Title',
    ),
    array(
      'id'    => 'home-start-up-content',
      'type'  => 'textarea',
      'title' => 'StartUp Area Content',
    ),
  )
));
//Brand Logo
CSF::createSection($prefix, array(
  'title' => __('Brand LOgo Area'),
  'id'    =>  'brand-logo-section',
  'fields' => array(
    array(
      'id'    => 'brand-logo-text',
      'type'  => 'text',
      'title' => 'Brand Logo In',     
    ),
    array(
      'id'    => 'brand-logo-title',
      'type'  => 'text',
      'title' => 'Brand Logo In Title',   
    ),    
    array(
      'id'     => 'brand-logo-repeater',
      'type'   => 'repeater',
      'title'  => 'Brand Logo Image',
      'button_title'  => 'Brand Logo Image',
      'fields' => array(
        array(
          'id'    => 'brand-logo-img',
          'type'  => 'media',
          'title' => 'Brand Logo Img'
        ),

      )
    )
  )
));


//Brand Logo
CSF::createSection($prefix, array(
  'title' => __('Testimonail Area'),
  'id'    =>  'testimonial-section',
));
CSF::createSection($prefix, array(
  'title' => __('Testimonial Heading Area'),
  'parent'    =>  'testimonial-section',
  'fields' => array(
    array(
      'id'    => 'testimonial-text',
      'type'  => 'text',
      'title' => 'Testimonial',     
    ),
    array(
      'id'    => 'testimonial-title',
      'type'  => 'text',
      'title' => 'Testimonial Title',   
    ),    
    array(
      'id'    => 'testimonial-content',
      'type'  => 'textarea',
      'title' => 'Testimonial Content',   
    ),    
  
  )
));CSF::createSection($prefix, array(
  'title' => __('Testimonial Slide Area'),
  'parent'    =>  'testimonial-section',
  'fields' => array(
    array(
      'id'     => 'testimonial-repeater',
      'type'   => 'repeater',
      'title'  => 'Testimonial Slide Content',
      'button_title'  => 'Slide Content',
      'fields' => array(
        array(
          'id'    => 'testimonial-title',
          'type'  => 'text',
          'title' => 'Testimonial Title'
        ),
        array(
          'id'    => 'testimonial-img',
          'type'  => 'media',
          'title' => 'Testimonial Img'
        ),
        array(
          'id'    => 'testimonial-name',
          'type'  => 'text',
          'title' => 'Testimonial name'
        ),
        array(
          'id'    => 'testimonial-adr',
          'type'  => 'text',
          'title' => 'Testimonial Adress'
        ),
      )
    )
  
  )
));