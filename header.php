<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head()?>
</head>

<body>
    <!-- header area strat -->
  <header>
    <section class="pos-header-area">
      <div class="pos-header">
        <div class="container">
          <div class="row">
            <div class="col-xl-2 col-4">
              <div class="pos-logo">
                <a href="<?php echo esc_url(site_url())?>"><img src="<?php echo get_template_directory_uri()?>/asset/img/Logo.png" alt=""></a>
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
                    <ul class="navbar-nav">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="index.html" role="button" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          Home
                        </a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="blog.html" role="button" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          Blog
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="blog-details.html">Blog Details</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          About Us
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          Contact us
                        </a>
                      </li>
                    </ul>
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
