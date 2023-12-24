<?php

/**
 * Template Name: Blog Page
 */
get_header() ?>
<!-- blog main content start -->
<main>

    <!-- blog hero section start -->
    <section class="blog-pos-hero-area" style="background: url(<?php
                                                                $blog_hero_bg = postonstart_get_option('blog-hero-bg');
                                                                if (!empty($blog_hero_bg)) {
                                                                    echo esc_url($blog_hero_bg['url']);
                                                                }; ?>) no-repeat center / cover;">
        <div class="container ">
            <div class="row ">
                <div class="blog-hero-post-area d-lg-flex">
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div class="blog-hero-content-area">
                            <h5><?php if (!empty(postonstart_get_option('blog-hero-name'))) {
                                    echo esc_html(postonstart_get_option('blog-hero-name'));
                                };
                                ?></h5>
                            <h1><?php if (!empty(postonstart_get_option('blog-hero-title'))) {
                                    echo esc_html(postonstart_get_option('blog-hero-title'));
                                };
                                ?></h1>
                            <h6>By <span><?php if (!empty(postonstart_get_option('blog-hero-athor'))) {
                                                echo esc_html(postonstart_get_option('blog-hero-athor'));
                                            };
                                            ?></span><?php if (!empty(postonstart_get_option('blog-hero-date'))) {
                                                            echo esc_html(postonstart_get_option('blog-hero-date'));
                                                        };
                                                        ?></h6>
                            <p><?php if (!empty(postonstart_get_option('blog-hero-content'))) {
                                    echo esc_html(postonstart_get_option('blog-hero-content'));
                                };
                                ?></p>
                        </div>
                    </div>
                    <div class="col-xl-6 text-xl-end">
                        <div class="blog-hero-content-img">
                            <img src="<?php
                                        $blog_hero_thumb = postonstart_get_option('blog-hero-thumb');
                                        if (!empty($blog_hero_thumb)) {
                                            echo esc_url($blog_hero_thumb['url']);
                                        };
                                        ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog hero section end -->
    <!-- blog all area start -->
    <section class="blog-all-post-area">
        <div class="container">
            <!-- single blog post all start -->
            <div class="row">
                <div class="col-12">
                    <div class="blog-all-area-heading border-bottom border-1 pb-1
                            border-black mb-3">
                        <h3><?php if (!empty(postonstart_get_option('blog-main-title'))) {
                                echo esc_html(postonstart_get_option('blog-main-title'));
                            }; ?></h3>
                    </div>
                </div>
            </div>
            <div class="single-blog-post-all d-flex flex-column gap-5">
                <!-- this is single blog start-->
                <?php
                $blog_all_post = new WP_Query(array(
                    'post_type'  => 'post',
                    'posts_per_page' => 4,
                ));
                if ($blog_all_post->have_posts()) : while ($blog_all_post->have_posts()) : $blog_all_post->the_post(); ?>
                        <div class="row single-blog-post-single">
                            <div class="col-xl-5 col-md-5">
                                <div class="single-blog-post-thumb">
                                    <?php  if(has_post_thumbnail()){the_post_thumbnail('blog-thumb-img');} ;?>
                                </div>
                            </div>
                            <div class="col-xl-7 col-md-7 text-start">
                                <div class="blog-post-single-contnent">
                                    <span><?php
                                            $blog_post_meta = get_post_meta(get_the_ID(), 'blog_tag_name', true);
                                            echo esc_html($blog_post_meta);
                                            ?></span>
                                    <a href="<?php the_permalink() ?>">
                                        <h4><?php the_title() ?></h4>
                                    </a>
                                    <p><?php echo wp_trim_words(get_the_content(), 60, true) ?></p>
                                </div>
                            </div>
                        </div>
                <?php endwhile;
                endif; ?>
                <!-- this is single blog end-->
            </div>
        </div>
        </div>
        <!-- single blog all post end -->
        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-center gap-4">
                <?php echo paginate_links(array(
                    'type' => 'plain',
                    'prev_text' => '<i class="fa-solid fa-chevron-left"></i>Prev',
                    'next_text' => 'Next<i class="fa-solid fa-chevron-right"></i>',
                )); ?>
            </div>
    </section>
    <!-- blog all area end -->
    <!-- catagory area start -->
    <section class="pos-catagory-area">
        <div class="pos-catagory">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="pos-catagory-heading pos-heading-section mb-5">
                            <h2>
                                <?php if (!empty(postonstart_get_option('blog-sidebar-title'))) {
                                    echo esc_html(postonstart_get_option('blog-sidebar-title'));
                                }; ?>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row pos-heading-section gy-4">
                    <!-- single catagory area start -->
                    <?php
                    $catagories_content = postonstart_get_option('catagory-reapter-group');
                    if (!empty($catagories_content)) : foreach ($catagories_content as $catagories_values) : ?>
                            <div class="col-xl-3">
                                <div class="pos-single-catagory-area">
                                    <i class="fa-solid <?php if (!empty($catagories_values)) {
                                                            echo esc_attr($catagories_values['catagory_icon']);
                                                        }; ?>"></i>
                                    <h3><?php if (!empty($catagories_values)) {
                                            echo esc_html($catagories_values['catagory_title']);
                                        }; ?></h3>
                                    <p><?php if (!empty($catagories_values)) {
                                            echo esc_html($catagories_values['catagories-texarea']);
                                        }; ?></p>

                                </div>
                            </div>
                    <?php endforeach;
                    endif; ?>
                    <!-- single catagory area end -->
                </div>
            </div>
        </div>
    </section>
    <!-- catagory area end -->
<!-- blog main content end -->
<?php get_footer() ?>