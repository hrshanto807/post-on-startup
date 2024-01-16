<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head()?>
</head>
<body <?php body_class()?>>
    <!-- header area strat -->
  <header>
    <section class="pos-header-area">
      <div class="pos-header">
        <div class="container">
          <div class="row">
            <div class="col-xl-2 col-4">
              <div class="pos-logo">
                <a href="<?php echo esc_url(home_url())?>"><img src="<?php $header_img = postonstart_get_option('header_logo');
                if(!empty($header_img)){echo esc_url($header_img['url']);};?>" alt=""></a>
              </div>
            </div>
            <div class="col-8 flex pos-primary-menu-main-all">
              <nav class="navbar navbar-expand-lg pos-primary-menu">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="menu-toggle"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <?php wp_nav_menu(array(
                            'theme_location'  =>  'poston_main_menu',
                            'menu_class'      =>  'navbar-nav ml-auto',
                            "container"       =>  '',
                            'walker'          => new WP_Bootstrap_Navwalker(),

                        ));
                        ?>        
                  </div>
                </div>
              </nav>
            </div>
            <div class="col-2 text-center d-flex align-items-center">
            <div class="pos-header-button">
                <a href="#" class="pos-button">Subscribe</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </header>  
  <!-- hedeaer area end-->
