<?php

/**
 * Template Name: Author Page
 */
get_header()

?>

<!-- author main area start-->
<main>
    <!-- author hero section start -->
    <section class="author-hero-area position-relative" style="background: url(<?php $author_img = postonstart_get_option('author-hero-bg');
                                                                                if (!empty($author_img)) {
                                                                                    echo esc_url($author_img['url']);
                                                                                }; ?>) no-repeat center / cover;">
        <div class="container ">
            <div class="row ">
                <div class="col-xl-4 text-xl-end">
                    <div class="author-hero-content-img">
                        <img src="<?php $author_img = postonstart_get_option('author-profile-img');
                                    if (!empty($author_img)) {
                                        echo esc_url($author_img['url']);
                                    }; ?>" alt="">
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="authour-hero-content-area">
                        <h2><?php if (!empty(postonstart_get_option('author-us-title'))) {
                                echo esc_html(postonstart_get_option('author-us-title'));
                            }; ?></h2>
                        <p><?php if (!empty(postonstart_get_option('author-textarea'))) {
                                echo esc_html(postonstart_get_option('author-textarea'));
                            }; ?></p>
                        <div class="pos-single-author-icon-area">
                            <?php $author_social = postonstart_get_option('poston-repeater-social');
                            if (!empty($author_social)) : foreach ($author_social as $social_author) :
                            ?>
                                    <a href="<?php if (!empty($social_author)) {
                                                    echo esc_url($social_author['author-social-link']);
                                                }; ?>"><i class="fa-brands <?php if (!empty($social_author)) {
                                                                                echo esc_attr($social_author['author-social-icon']);
                                                                            }; ?>"></i></a>
                            <?php endforeach;
                            endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container author-hero-color-area ">
            <div class="row ">
                <div class="col-2"></div>
                <div class="col-7 bg-warning" style="height: 23px;"></div>
                <div class="col-3" style="height: 23px; background: purple;"></div>
            </div>
        </div>
    </section>
    <!-- author post area start-->
    <!-- author all area start -->
    <section class="blog-all-post-area">
        <div class="container">
            <div class="row">
                <!-- single blog post all start -->
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="blog-all-area-heading mb-5">
                                <h3><?php if (!empty(postonstart_get_option('author-blog-main-title'))) {
                                        echo esc_html(postonstart_get_option('author-blog-main-title'));
                                    }; ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="single-author-post-all d-flex flex-column gap-5 mt-xl-5">
                        <!-- this is single author start-->
                        <?php
                        $blog_all_post = new WP_Query(array(
                            'post_type'  => 'post',
                            'posts_per_page' => 2,
                            'order' => 'asc'

                        ));
                        if ($blog_all_post->have_posts()) : while ($blog_all_post->have_posts()) : $blog_all_post->the_post(); ?>
                                <div class="row single-author-post-single align-items-center">
                                    <div class="col-xl-5 col-md-5">
                                        <div class="single-author-post-thumb">
                                            <?php if (has_post_thumbnail()) {
                                                the_post_thumbnail('blog-thumb-img');
                                            }; ?>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-md-7 ">
                                        <div class="author-post-single-contnent">
                                            <span><?php
                                                    $blog_post_meta = get_post_meta(get_the_ID(), 'blog_tag_name', true);
                                                    echo esc_html($blog_post_meta);
                                                    ?></span>
                                            <a href="<?php the_permalink() ?>">
                                                <h4><?php the_title() ?></h4>
                                            </a>
                                            <p><?php echo wp_trim_words(get_the_content(), 40, true) ?></p>
                                        </div>
                                    </div>
                                </div>
                        <?php endwhile;
                        endif; ?>
                        <!-- single author all post end -->
                    </div>
    </section>
    <!-- author all area end -->
    <!-- author post area end-->
</main>
<!-- author main area end-->
<?php get_footer() ?>