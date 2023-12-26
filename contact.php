<?php 
/**
 * Template Name: Contact Us
 */ 
get_header()
?>
    <!-- contact main form start-->
    <main>
        <!-- contact form heading area strat -->

        <section class="contact-from-headeing-area-all" style="padding-top: 128px;padding-bottom: 64px;">
            <div class="contact-container">
                <div class="row text-center">
                    <div class="col-12">
                        <div class="contact-main-heading-content">
                            <h5><?php if(!empty(postonstart_get_option('contacr-form-text'))){
                              echo esc_html(postonstart_get_option('contacr-form-text'));
                            };?></h5>
                            <h2><?php if(!empty(postonstart_get_option('contacr-form-title'))){
                              echo esc_html(postonstart_get_option('contacr-form-title'));
                            };?></h2>
                            <p><?php if(!empty(postonstart_get_option('contacr-form-content'))){
                              echo wp_kses(postonstart_get_option('contacr-form-content'),poston_allow_tags());
                            };?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact form heading area end -->
        <!-- contaact form working hours area start -->
        <section class="conatact-form-time-area">
            <div class="contact-container conatact-form-time-area-container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="conatact-form-time-area-left">
                            <span><?php if(!empty(postonstart_get_option('working-hours-text'))){
                              echo esc_html(postonstart_get_option('working-hours-text'));
                            };?></span>
                            <h4><?php if(!empty(postonstart_get_option('working-hours-days'))){
                              echo esc_html(postonstart_get_option('working-hours-days'));
                            };?></h4>
                            <h4><?php if(!empty(postonstart_get_option('working-hours-date'))){
                              echo esc_html(postonstart_get_option('working-hours-date'));
                            };?></h4>
                            <p><?php if(!empty(postonstart_get_option('working-hours-support'))){
                              echo esc_html(postonstart_get_option('working-hours-support'));
                            };?></p>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="conatact-form-time-area-right">
                            <span><?php if(!empty(postonstart_get_option('contact-us-name'))){
                              echo esc_html(postonstart_get_option('contact-us-name'));
                            };?></span>
                            <a href="tel:">
                                <h4><?php if(!empty(postonstart_get_option('contact-us-phone'))){
                              echo esc_html(postonstart_get_option('contact-us-phone'));
                            };?></h4>
                            </a>
                            <a href="mailto:">
                                <p><?php if(!empty(postonstart_get_option('contact-us-email'))){
                              echo esc_html(postonstart_get_option('contact-us-email'));
                            };?></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contaact form working hours area end -->
        <!-- contact form area start -->
        <section class="contact-form-all-area" style="margin-bottom: 128px;">
            <div class="contact-container">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-form">
                        <?php the_content()?>                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact form area end -->
    </main>
    <!-- contact main form end-->
<?php get_footer()?>