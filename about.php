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
                        <?php $author_page_here = new WP_Query(array( 
                            'post_type' => 'poston-author',
                            'posts_per_page'=> 8,
                            'order'=> "asc",
                        ));
                        if($author_page_here->have_posts()):while($author_page_here->have_posts()):$author_page_here->the_post();
                        
                        ?>
                        <!-- single author start -->
                        <div class="col-xl-3 col-sm-12 align-items-center">
                            <div class="about-single-author-start">
                               <?php if(has_post_thumbnail()){the_post_thumbnail('author-thumb-img');}?>
                                <a href="<?php the_permalink()?>"><h4><?php the_title()?></h4></a>
                                <p><?php $authou_role = get_post_meta(get_the_ID(),'author_role',true);
                                if(!empty($authou_role)){echo esc_html($authou_role);};
                                ?><a href="<?php echo esc_url(site_url())?>"><?php bloginfo('name')?></a></p>
                                <div class="pos-single-author-icon-area">
                                <?php $author_social = get_post_meta(get_the_ID(),'social_repeat_group',true);
                                            if(!empty($author_social)):foreach($author_social as $social_author):
                                                if ( isset( $social_author['social_icon'] ) ) {
                                                   $author_icon = esc_attr( $social_author['social_icon'] );
                                                };
                                                if ( isset( $social_author['social_link'] ) ) {
                                                    $author_link = esc_url( $social_author['social_link'] );
                                                };
                                            ?>
                                     <a href="<?php echo $author_link;?>"><i class="<?php echo $author_icon;?>"></i></a>
                                            <?php endforeach;endif?>
                                </div>
                            </div>
                        </div>
                        <?php endwhile;endif;?> 
                        <!-- single author end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- authors area end -->
       <?php get_footer()?>