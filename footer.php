<?php if (!is_page(array( 92,84,103))) : ?>
    <section class="pos-join-area">
        <div class="pos-join-now">
            <div class="container">
                <div class="row pos-join-content-area">
                    <div class="col-12 pos-heading-section text-center">
                        <h2><?php if (!empty(postonstart_get_option('join_title'))) {
                                echo esc_html(postonstart_get_option('join_title'));
                            }; ?></h2>
                        <p class="mt-3 mb-5"><?php if (!empty(postonstart_get_option('join-texarea'))) {
                                                    echo esc_html(postonstart_get_option('join-texarea'));
                                                }; ?></p>
                        <div class="pos-join-button">
                            <a href="<?php if (!empty(postonstart_get_option('join_link'))) {
                                        echo esc_url(postonstart_get_option('join_link'));
                                    }; ?>" class="<?php if (!empty(postonstart_get_option('join_button'))) {
                         echo esc_attr(postonstart_get_option('join_button'));
                           }; ?>"><?php if (!empty(postonstart_get_option('join_button_name'))) {
                                        echo esc_html(postonstart_get_option('join_button_name'));
                                    }; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- join area end -->
    </main>
<?php endif; ?>

<!-- footer area start -->
<footer class="pos-footer-all-section-area">
    <!-- footer heading area start -->
    <section class="pos-footer-heading-area">
        <div class="footer-pos-heading">
            <div class="container">
                <div class="row d-flex justify-content-between mb-5">
                    <div class="col-xl-6 pos-logo-col">
                        <div class="pos-logo">
                            <a href="<?php echo esc_url(home_url()) ?>"><img src="<?php $header_img = postonstart_get_option('footer_logo');
                                                                                    if (!empty($header_img)) {
                                                                                        echo esc_url($header_img['url']);
                                                                                    }; ?>" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-6 p-0">
                        <div class="pos-secondary-menu">
                            <?php wp_nav_menu(array(
                                'theme_location'  =>  'poston_second_menu',
                            ));
                            ?>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- footer heading area end -->
    <!-- footer subscribe area start  -->
    <section class="pos-subscribe-area">
        <div class="pos-subscribe">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="pos-subscribes-content pos-heading-section">
                            <h2 class="text-white"><?php if(postonstart_get_option('footer-area-title-subs')){
                                echo esc_html(postonstart_get_option('footer-area-title-subs'));
                            };?></h2>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="pos-subsribe-submit-area">
                            <div class="pos-subscribe-input-area">
                                <?php 
                                if(is_active_sidebar('sidebar-2')){
                                    dynamic_sidebar('sidebar-2');
                                };
                                ?>
                               
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer subscribe area end  -->
    <!-- footer footer area start -->
    <section class="pos-footer-footer-area">
        <div class="pos-footer-footer">
            <div class="container">
                <div class="pos-heading-section pos-last-section-footer">
                    <div class="pos-footer-last-area">
                        <p>Finstreet <a href="tel:"><?php if(postonstart_get_option('footer-area-phone')){
                                echo esc_html(postonstart_get_option('footer-area-phone'));
                            };?></a> Fintown<br>
                            <a href="tel:"><?php if (!empty(postonstart_get_option('contact-us-phone'))) {
                                        echo esc_html(postonstart_get_option('contact-us-phone'));
                                    }; ?></a> <a href="mailto:"><?php if (!empty(postonstart_get_option('contact-us-email'))) {
                                                    echo esc_html(postonstart_get_option('contact-us-email'));
                                                }; ?></a>
                        </p>
                    </div>
                    <div class="pos-single-author-icon-area">
                        <?php $footer_social = postonstart_get_option('footer-repeater-social');
                        if(!empty($footer_social)):foreach($footer_social as $socail_footer):
                        
                        ?>
                        <a href="<?php echo esc_url($socail_footer['footer-social-link'])?>"><i class="fa-brands <?php echo esc_attr($socail_footer['footer-social-icon'])?>"></i></a>

                        <?php endforeach;endif?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer footer area end -->
</footer>
<!-- footer area end -->
<?php wp_footer() ?>
</body>

</html>