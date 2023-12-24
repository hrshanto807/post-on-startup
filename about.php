<?php 
/**
 * Template Name: About Page
 */
get_header();
?>
    <!-- about us main start -->
    <main>
        <!-- about us hero title area strat -->
        <section class="aboutus-top-area">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center ">
                    <div class="col-xl-5 ">
                        <div class="aboutus-title-area">
                            <h5><?php if(!empty(postonstart_get_option('about-us-title-name'))){echo esc_html(postonstart_get_option('about-us-title-name'));};?></h5>
                            <h1><?php if(!empty(postonstart_get_option('about-us-title'))){echo esc_html(postonstart_get_option('about-us-title'));};?></h1>
                        </div>

                    </div>
                    <div class="col-xl-5 aboutus-title-area-cont">
                        <p><?php if(!empty(postonstart_get_option('about-us-textarea'))){echo esc_html(postonstart_get_option('about-us-textarea'));};?></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- about us hero title area end -->
        <!-- about us viewer area start -->
        <section class="aboutus-viewer-area">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-12">
                        <div class="single-about-view-img">
                            <img src="<?php $img_viwer = postonstart_get_option('about-us-publishes-bg');if(!empty($img_viwer)){echo esc_url($img_viwer['url']);};
                            ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-5 all-view-published d-flex justify-content-between gap-sm-2">
                        <?php $postin_viewer_area = postonstart_get_option('poston-repeater-published');
                        if(!empty($postin_viewer_area)):foreach($postin_viewer_area as 
                        $about_view):
                        ?>
                        <!-- single publised start-->
                        <div class="single-view-published">
                            <h2><?php if(!empty($about_view)){
                                echo esc_html($about_view['published-number-text']);
                            };?></h2>
                            <p><?php if(!empty($about_view)){
                                echo esc_html($about_view['about-us-publish-name']);
                            };?></p>
                        </div>
                        <?php endforeach;endif;?>
                    </div>
                </div>
                <!-- about us color area start -->
                <div class="row">
                    <div class="viewer-color-about-us">
                        <div class="col-3" style="height: 23px; background: purple;"></div>
                        <div class="col-5 bg-warning" style="height: 23px;"></div>
                    </div>

                </div>
                <!-- about us color area end-->
            </div>
        </section>
        <!-- about us viewer area end -->
        <!-- about us mission vission area start -->
        <section class="pos-about-us-mission-area">
            <div class="pos-about-us">
                <div class="container">
                    <div class="row pos-about-section-container">
                        
                            <?php $mission_viision_area = postonstart_get_option('poston-repeater-mision');if(!empty($mission_viision_area)):
                            foreach($mission_viision_area as $vission_mission_area):
                            ?>
                            <div class="col-xl-6">
                            <div class="pos-about-us-mision-area pos-heading-section">
                                <h6><?php if(!empty($vission_mission_area)){
                                    echo esc_html($vission_mission_area['about-us-mision-name'])
                                    ;};?><h6>
                                        <h3 class="mt-4 mb-3"><?php if(!empty($vission_mission_area)){
                                    echo esc_html($vission_mission_area['about-us-mision-title'])
                                    ;};?></h3>
                                        <p><?php if(!empty($vission_mission_area)){
                                    echo esc_html($vission_mission_area['about-us-mision-content'])
                                    ;};?></p>
                            </div>
                            </div>
                            <?php endforeach;endif;?>
                    </div>
                </div>
            </div>
        </section>
        <!-- about us mission vission area end -->
        <!-- authors area start -->
        <section class="aboutus-authors-area">
            <div class="aboutus-authors">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="pos-authors-heading pos-heading-section text-center mb-5">
                                <h2>List of Authors</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- single author start -->
                        <div class="col-xl-3 col-sm-12 align-items-center">
                            <div class="about-single-author-start">
                                <img src="<?php echo get_template_directory_uri() ?>/asset/img//author-1.png" class="mb-3">
                                <h4>Floyd Miles</h4>
                                <p>Content Writer <a href="#">@Company</a></p>
                                <div class="pos-single-author-icon-area">
                                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                </div>

                            </div>
                        </div>
                        <!-- single author end -->
                        <!-- single author start -->
                        <div class="col-xl-3">
                            <div class="about-single-author-start ">
                                <img src="<?php echo get_template_directory_uri() ?>/asset/img//author-2.png" class="mb-3">
                                <h4>Dianne Russell</h4>
                                <p>Content Writer <a href="#">@Company</a></p>
                                <div class="pos-single-author-icon-area ">
                                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- single author end -->
                        <!-- single author start -->
                        <div class="col-xl-3">
                            <div class="about-single-author-start">
                                <img src="<?php echo get_template_directory_uri() ?>/asset/img//author-3.png" class="mb-3">
                                <h4>Jenny Wilson</h4>
                                <p>Content Writer <a href="#">@Company</a></p>
                                <div class="pos-single-author-icon-area">
                                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- single author end -->
                        <!-- single author start -->
                        <div class="col-xl-3">
                            <div class="about-single-author-start">
                                <img src="<?php echo get_template_directory_uri() ?>/asset/img//author-4.png" class="mb-3">
                                <h4>Leslie Alexander</h4>
                                <p>Content Writer <a href="#">@Company</a></p>
                                <div class="pos-single-author-icon-area">
                                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- single author end -->
                        <!-- single author start -->
                        <div class="col-xl-3">
                            <div class="about-single-author-start">
                                <img src="<?php echo get_template_directory_uri() ?>/asset/img//author-1.png" class="mb-3">
                                <h4>Floyd Miles</h4>
                                <p>Content Writer <a href="#">@Company</a></p>
                                <div class="pos-single-author-icon-area">
                                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                </div>

                            </div>
                        </div>
                        <!-- single author end -->
                        <!-- single author start -->
                        <div class="col-xl-3">
                            <div class="about-single-author-start ">
                                <img src="<?php echo get_template_directory_uri() ?>/asset/img//author-2.png" class="mb-3">
                                <h4>Dianne Russell</h4>
                                <p>Content Writer <a href="#">@Company</a></p>
                                <div class="pos-single-author-icon-area ">
                                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- single author end -->
                        <!-- single author start -->
                        <div class="col-xl-3">
                            <div class="about-single-author-start">
                                <img src="<?php echo get_template_directory_uri() ?>/asset/img//author-3.png" class="mb-3">
                                <h4>Jenny Wilson</h4>
                                <p>Content Writer <a href="#">@Company</a></p>
                                <div class="pos-single-author-icon-area">
                                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- single author end -->
                        <!-- single author start -->
                        <div class="col-xl-3">
                            <div class="about-single-author-start">
                                <img src="<?php echo get_template_directory_uri() ?>/asset/img//author-4.png" class="mb-3">
                                <h4>Leslie Alexander</h4>
                                <p>Content Writer <a href="#">@Company</a></p>
                                <div class="pos-single-author-icon-area">
                                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- single author end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- authors area end -->
       <?php get_footer()?>