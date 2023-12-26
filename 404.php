<?php

/**
 * Template Name: 404
 */
get_header() ?>
<main>
  <section class="error-page-area-all">
    <div class="contact-container">
      <div class="row">
        <div class="col-12 text-center">
         <?php the_content()?>
          <a href="<?php echo  esc_url(home_url());?>" class="pos-button error-button ">Go To back Home</a>
        </div>
      </div>
    </div>
  </section>
  <?php get_footer() ?>