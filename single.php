<?php get_header() ?>
<!-- blog main content start -->
<main>
    <!-- blog hero section start -->
    <section class="blog-deatils-hero-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="posts-author-profile">
                        <div class="posts-author-profile-dipaly-set">
                            <img src="<?php $blog_details_img = postonstart_get_option('blog-details-img');
                                        if (!empty($blog_details_img)) {
                                            echo esc_url($blog_details_img['url']);
                                        };

                                        ?>" alt="">
                            <div class="blog-author-name">
                                <h4><?php if (!empty(postonstart_get_option('blog-details-name'))) {
                                        echo esc_html(postonstart_get_option('blog-details-name'));
                                    }; ?></h4>
                                <p><?php if (!empty(postonstart_get_option('blog-details-post-on'))) {
                                        echo esc_html(postonstart_get_option('blog-details-post-on'));
                                    }; ?><span><?php if (!empty(postonstart_get_option('blog-details-date'))) {
                                                    echo esc_html(postonstart_get_option('blog-details-date'));
                                                }; ?></span></p>
                            </div>
                        </div>
                        <h1><?php if (!empty(postonstart_get_option('blog-details-title'))) {
                                echo esc_html(postonstart_get_option('blog-details-title'));
                            }; ?></h1>
                        <a href="#"><i class="fa-solid <?php if (!empty(postonstart_get_option('blog-details-icon'))) {
                                                            echo esc_html(postonstart_get_option('blog-details-icon'));
                                                        }; ?>"></i><?php if (!empty(postonstart_get_option('blog-details-catagories'))) {
                                                                        echo esc_attr(postonstart_get_option('blog-details-catagories'));
                                                                    }; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog hero section end -->
    <!-- single Blog Details here start -->
    <section class="single-blog-details-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="blog-details-pages-img">
                                <?php if(has_post_thumbnail()){the_post_thumbnail('single-blog-thumb-img');}?>
                                 
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="blog-details-content">
                                <?php if (have_posts()) : while (have_posts()) : the_post();
                                        the_content();
                                    endwhile;
                                endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 d-flex justify-content-center">

                    <div class="all-blog-widget-area">
                        <!-- single widget start -->
                        <div class="single-blog-widget-area ">
                            <div class="single-widget-title">
                                <h2>
                                    <?php if (!empty(postonstart_get_option('blog-sidebar-title'))) {
                                        echo esc_html(postonstart_get_option('blog-sidebar-title'));
                                    }; ?>
                                </h2>
                            </div>
                            <div class="widget-catagory-list-area">
                                <ul>
                                    <a href="#"><i class="fa-solid fa-signal"></i>
                                        <li>Startup</li>
                                    </a>
                                    <a href="#"><i class="fa-solid fa-signal"></i>
                                        <li>Startup</li>
                                    </a>
                                    <a href="#"><i class="fa-solid fa-signal"></i>
                                        <li>Startup</li>
                                    </a>
                                    <a href="#"><i class="fa-solid fa-signal"></i>
                                        <li>Startup</li>
                                    </a>

                                </ul>
                            </div>
                        </div>
                        <!-- single widget end -->
                        <!-- single widget start -->
                        <div class="single-blog-widget-area ">
                            <div class="single-widget-title">
                                <h2>
                                    <?php if (!empty(postonstart_get_option('blog-tags-title'))) {
                                        echo esc_html(postonstart_get_option('blog-tags-title'));
                                    }; ?>
                                </h2>
                            </div>
                            <div class="widget-catagory-list-area ">
                                <div class="widget-catagory-tags-area">
                                    <a href="#">
                                        <p>Business</p>
                                    </a>
                                    <a href="#">
                                        <p>Business</p>
                                    </a>
                                    <a href="#">
                                        <p>Business</p>
                                    </a>
                                    <a href="#">
                                        <p>Business</p>
                                    </a>
                                    <a href="#">
                                        <p>Business</p>
                                    </a>
                                    <a href="#">
                                        <p>Business</p>
                                    </a>


                                </div>

                            </div>
                        </div>
                        <!-- single widget end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- single Blog Details here end -->
    <!-- blog all area start -->
    <section class="blog-all-post-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="blog-all-area-heading mb-5">
                        <h3><?php if (!empty(postonstart_get_option('blog-next-post-title'))) {
                                echo esc_html(postonstart_get_option('blog-next-post-title'));
                            }; ?></h3>
                    </div>
                </div>
            </div>
            <div class="single-blog-post-all d-xl-flex d-md-flex gap-5">
                <?php
                $next_blog_post = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'order'  => 'asc'
                ));
                if ($next_blog_post->have_posts()) : while ($next_blog_post->have_posts()) : $next_blog_post->the_post() ?>
                        <!-- this is single blog start-->
                        <div class="row flex-column gap-5">
                            <div class="col-xl-12 col-md-12">
                                <div class="single-blog-post-thumb">
                                    <?php  if(has_post_thumbnail()){the_post_thumbnail('blog-thumb-img');}; ?>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="blog-post-single-contnent">
                                    <h6>By <span>
                                    <?php
                                            $blog_post_author_name_meta = get_post_meta(get_the_ID(), 'blog_author_name', true);
                                            echo esc_html($blog_post_author_name_meta);
                                            ?></span> <?php echo get_the_date()?></h6>
                                    <a href="<?php the_permalink() ?>">
                                        <h4><?php the_title() ?></h4>
                                    </a>
                                    <p><?php echo wp_trim_words(get_the_content(), 40, true) ?></p>
                                </div>
                            </div>
                        </div>
                <?php endwhile;
                endif; ?>
            </div>
        </div>
    </section>
    <!-- blog all area end -->
   <?php get_footer()?>