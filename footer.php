<?php if(!file_exists('author.php') || !file_exists('contact.php') || !file_exists('privacy.php')):?>
<section class="pos-join-area">
        <div class="pos-join-now">
            <div class="container">
                <div class="row pos-join-content-area">
                    <div class="col-12 pos-heading-section text-center">
                        <h2><?php if(!empty(postonstart_get_option('join_title'))){
                                echo esc_html(postonstart_get_option('join_title'));
                            };?></h2>
                        <p class="mt-3 mb-5"><?php if(!empty(postonstart_get_option('join-texarea'))){
                                echo esc_html(postonstart_get_option('join-texarea'));
                            };?></p>
                        <div class="pos-join-button">
                            <a href="<?php echo get_theme_file_uri('contact.php')?>" class="<?php if(!empty(postonstart_get_option('join_button'))){
                                echo esc_attr(postonstart_get_option('join_button'));
                            };?>"><?php if(!empty(postonstart_get_option('join_button_name'))){
                                echo esc_html(postonstart_get_option('join_button_name'));
                            };?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- join area end -->
</main>
<?php endif;?>

<!-- footer area start -->
    <footer class="pos-footer-all-section-area">
        <!-- footer heading area start -->
        <section class="pos-footer-heading-area">
            <div class="footer-pos-heading">
                <div class="container">
                    <div class="row d-flex justify-content-between mb-5">
                        <div class="col-xl-6 pos-logo-col">
                            <div class="pos-logo">
                                <img src="<?php echo get_template_directory_uri()?>/asset/img/Logo.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-6 p-0">
                            <div class="pos-secondary-menu">

                                <ul>
                                    <li><a href="catagory.html">Catagory</a></li>
                                    <li><a href="author.html">Author</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                    <li><a href="privacy.html">Privacy Policy</a></li>
                                    <li><a href="404.html">404page</a></li>
                                </ul>
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
                                <h2 class="text-white">Subscribe to our news letter to get latest updates and news</h2>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="pos-subsribe-submit-area">
                                <div class="pos-subscribe-input-area">
                                    <input type="email" value="Enter Your Email">
                                </div>
                                <div class="pos-footer-button">
                                    <a href="#" class="pos-button">Subscribe</a>
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
                            <p>Finstreet 118 2561 Fintown<br>
                                Hello@finsweet.com 020 7993 2905</p>
                        </div>
                        <div class="pos-single-author-icon-area">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- footer footer area end -->
    </footer>
    <!-- footer area end -->
   <?php wp_footer()?>
</body>

</html>