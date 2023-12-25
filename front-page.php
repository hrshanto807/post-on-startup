<?php

/**
 * Template Name: Home Page
 */
get_header()
?>
<!-- home main page start -->
<main>
    <section class="pos-hero-area" style="background-image: url(<?php $hero_bg = postonstart_get_option('home-hero-bg');
                                                                if (!empty($hero_bg)) {
                                                                    echo esc_url($hero_bg['url']);
                                                                } ?>);background-size:cover;background-repeat: no-repeat;">
        <div class="pos-hero">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="pos-hero-content-area pos-heading-section">
                            <h5><?php if (!empty(postonstart_get_option('home-hero-name'))) {
                                    echo esc_html(postonstart_get_option('home-hero-name'));
                                };
                                ?><span><?php if (!empty(postonstart_get_option('home-hero-catagories'))) {
                                            echo esc_html(postonstart_get_option('home-hero-catagories'));
                                        };
                                        ?></span></h5>
                            <h1><?php if (!empty(postonstart_get_option('home-hero-title'))) {
                                    echo esc_html(postonstart_get_option('home-hero-title'));
                                };
                                ?></h1>
                            <h6>By <span><?php if (!empty(postonstart_get_option('home-hero-athor'))) {
                                                echo esc_html(postonstart_get_option('home-hero-athor'));
                                            };
                                            ?></span><?php if (!empty(postonstart_get_option('home-hero-date'))) {
                                                            echo esc_html(postonstart_get_option('home-hero-date'));
                                                        };
                                                        ?></h6>
                            <p class="text-white"><?php if (!empty(postonstart_get_option('home-hero-content'))) {
                                                        echo esc_html(postonstart_get_option('home-hero-content'));
                                                    };
                                                    ?></p>
                            <div class="pos-hero-button">
                                <a href="<?php if (!empty(postonstart_get_option('home-hero-link'))) {
                                                echo esc_url(postonstart_get_option('home-hero-link'));
                                            };
                                            ?>" class="<?php if (!empty(postonstart_get_option('home-hero-button-class'))) {
                                                            echo esc_html(postonstart_get_option('home-hero-button-class'));
                                                        }; ?>">
                                    <?php if (!empty(postonstart_get_option('home-hero-name-button'))) {
                                        echo esc_html(postonstart_get_option('home-hero-name-button'));
                                    }; ?>
                                    <i class="fa-solid <?php if (!empty(postonstart_get_option('home-hero-icon'))) {
                                                            echo esc_attr(postonstart_get_option('home-hero-icon'));
                                                        }; ?>"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero section done -->
    <!-- post area start -->
    <section class="pos-post-area">
        <div class="pos-post-type">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="pos-features-post-area pos-heading-section">
                            <h3 class="mb-4"><?php if (!empty(postonstart_get_option('featurd-blog-main-title'))) {
                                                    echo esc_html(postonstart_get_option('featurd-blog-main-title'));
                                                }; ?></h3>
                            <div class="pos-features-content">
                                <img src="<?php $featured_img = postonstart_get_option('fetured-img');
                                            if (!empty($featured_img)) {
                                                echo esc_url($featured_img['url']);
                                            }; ?>" alt="">
                                <h6>By <span><?php if (!empty(postonstart_get_option('featured-post-athor'))) {
                                                    echo esc_html(postonstart_get_option('featured-post-athor'));
                                                };
                                                ?></span><?php if (!empty(postonstart_get_option('featured-post-date'))) {
                                                                echo esc_html(postonstart_get_option('featured-post-date'));
                                                            };
                                                            ?></h6>
                                <h4><?php if (!empty(postonstart_get_option('featured-post-title'))) {
                                        echo esc_html(postonstart_get_option('featured-post-title'));
                                    };
                                    ?></h4>
                                <p><?php if (!empty(postonstart_get_option('featured-post-content'))) {
                                        echo esc_html(postonstart_get_option('featured-post-content'));
                                    };
                                    ?></p>
                                <div class="pos-hero-button">
                                    <a href="<?php if (!empty(postonstart_get_option('featured-post-link'))) {
                                                    echo esc_url(postonstart_get_option('featured-post-link'));
                                                };
                                                ?>" class="<?php if (!empty(postonstart_get_option('featured-post-button-class'))) {
                                                                echo esc_html(postonstart_get_option('featured-post-button-class'));
                                                            }; ?>">
                                        <?php if (!empty(postonstart_get_option('featured-post-name-button'))) {
                                            echo esc_html(postonstart_get_option('featured-post-name-button'));
                                        }; ?>
                                        <i class="fa-solid <?php if (!empty(postonstart_get_option('featured-post-icon'))) {
                                                                echo esc_attr(postonstart_get_option('featured-post-icon'));
                                                            }; ?>"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="pos-post-all-area pos-heading-section">
                            <div class="pos-post-all-hedding d-flex justify-content-between mb-xl-5">
                                <h3><?php if (!empty(postonstart_get_option('blog-main-title'))) {
                                        echo esc_html(postonstart_get_option('blog-main-title'));
                                    }; ?></h3>
                                <a href="<?php if(file_exists('index.php')){
                                   echo get_template_directory_uri().'/index.php';
                                }; ?>" class=" d-flex align-items-end">View All</a>
                            </div>
                            <div class="pos-all-post-single-main-content">
                                <?php
                                $next_blog_post = new WP_Query(array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 6,
                                    'order'  => 'asc'
                                ));
                                if ($next_blog_post->have_posts()) : while ($next_blog_post->have_posts()) : $next_blog_post->the_post() ?>
                                        <!-- post all single area -->
                                        <div class="pos-post-all-single-content">
                                            <h6>By <span><?php
                                                            $blog_post_author_name_meta = get_post_meta(get_the_ID(), 'blog_author_name', true);
                                                            echo esc_html($blog_post_author_name_meta);
                                                            ?></span><?php echo get_the_date() ?></h6>
                                            <a href="<?php the_permalink() ?>">
                                                <h4><?php the_title() ?></h4>
                                            </a>
                                        </div>
                                        <!-- post all single area end-->
                                <?php endwhile;
                                endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- post area end -->
    <!-- about-us area start -->
    <section class="pos-about-us-heading-area">
        <div class="pos-about-us-heading">
            <div class="container">
                <div class="row" style="margin-top: 128px;">
                    <div class="col-2"></div>
                    <div class="col-7 bg-warning" style="height: 23px;"></div>
                    <div class="col-3" style="height: 23px; background: purple;"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us color area end-->
    <section class="pos-about-us-area">
        <div class="pos-about-us">
            <div class="container">
                <div class="row pos-about-section-container">
                    <div class="col-xl-6">
                        <div class="pos-about-us-content-area pos-heading-section">
                            <h6 class="mb-4"><?php if (!empty(postonstart_get_option('home-about-us-name'))) {
                                                echo esc_html(postonstart_get_option('home-about-us-name'));
                                            }; ?><h6>
                                    <h2><?php if (!empty(postonstart_get_option('home-about-us-title'))) {
                                                echo esc_html(postonstart_get_option('home-about-us-title'));
                                            }; ?></h2>
                                    <p class="my-3"><?php if (!empty(postonstart_get_option('home-about-us-content'))) {
                                                echo esc_html(postonstart_get_option('home-about-us-content'));
                                            }; ?></p>
                                    <div class="pos-hero-button">
                                        <a href="<?php if (!empty(postonstart_get_option('featured-post-link'))) {
                                                        echo esc_url(postonstart_get_option('featured-post-link'));
                                                    };
                                                    ?>" class="<?php if (!empty(postonstart_get_option('featured-post-button-class'))) {
                                                                echo esc_html(postonstart_get_option('featured-post-button-class'));
                                                            }; ?>">
                                            <?php if (!empty(postonstart_get_option('featured-post-name-button'))) {
                                                echo esc_html(postonstart_get_option('featured-post-name-button'));
                                            }; ?>
                                            <i class="fa-solid <?php if (!empty(postonstart_get_option('featured-post-icon'))) {
                                                                    echo esc_attr(postonstart_get_option('featured-post-icon'));
                                                                }; ?>"></i></a>
                                    </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="pos-about-us-mision-area pos-heading-section">
                            <h6><?php if (!empty(postonstart_get_option('home-about-us-mision-name'))) {
                                                echo esc_html(postonstart_get_option('home-about-us-mision-name'));
                                            }; ?><h6>
                                    <h3 class="mt-4 mb-3"><?php if (!empty(postonstart_get_option('home-about-us-mision-title'))) {
                                                echo esc_html(postonstart_get_option('home-about-us-mision-title'));
                                            }; ?></h3>
                                    <p><?php if (!empty(postonstart_get_option('home-about-us-mision-content'))) {
                                                echo esc_html(postonstart_get_option('home-about-us-mision-content'));
                                            }; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-us area end -->
    <!-- catagory area start -->
    <section class="pos-catagory-area">
        <div class="pos-catagory">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="pos-catagory-heading text-center pos-heading-section mb-5">
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
    <!-- started area start -->
    <section class="pos-started-area">
        <div class="pos-started">
            <div class="container">
                <div class="row pos-stared-img" style="background-image: url(<?php
                $startup_img = postonstart_get_option('home-start-up-img');
                if(!empty($startup_img)){echo esc_url($startup_img['url']);}; 
                ?>);background-repeat: no-repeat;">
                    <div class="col-xl-6">
                        <div class=""></div>
                    </div>
                    <div class="col-xl-6">
                        <div class="pos-started-content-area pos-heading-section">
                            <h6> <?php if (!empty(postonstart_get_option('home-start-up-name'))) {
                                    echo esc_html(postonstart_get_option('home-start-up-name'));
                                }; ?><h6>
                                    <h2> <?php if (!empty(postonstart_get_option('home-start-up-title'))) {
                                    echo esc_html(postonstart_get_option('home-start-up-title'));
                                }; ?></h2>
                                    <p class="mb-5"> <?php if (!empty(postonstart_get_option('home-start-up-content'))) {
                                    echo esc_html(postonstart_get_option('home-start-up-content'));
                                }; ?></p>
                                        <div class="pos-hero-button">
                                        <a href="<?php if (!empty(postonstart_get_option('featured-post-link'))) {
                                                        echo esc_url(postonstart_get_option('featured-post-link'));
                                                    };
                                                    ?>" class="<?php if (!empty(postonstart_get_option('featured-post-button-class'))) {
                                                                echo esc_html(postonstart_get_option('featured-post-button-class'));
                                                            }; ?>">
                                            <?php if (!empty(postonstart_get_option('featured-post-name-button'))) {
                                                echo esc_html(postonstart_get_option('featured-post-name-button'));
                                            }; ?>
                                            <i class="fa-solid <?php if (!empty(postonstart_get_option('featured-post-icon'))) {
                                                                    echo esc_attr(postonstart_get_option('featured-post-icon'));
                                                                }; ?>"></i></a>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- started area end -->
    <!-- authors area start -->
    <section class="pos-authors-area">
        <div class="pos-authors">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="pos-authors-heading pos-heading-section text-center mb-5">
                            <h2><?php if (!empty(postonstart_get_option('author-list-tittle'))) {
                                    echo esc_html(postonstart_get_option('author-list-tittle'));
                                } ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row pos-heading-section pos-all-single-atuhors-area owl-carousel">
                    <?php $author_page_here = new WP_Query(array(
                        'post_type' => 'poston-author',
                        'posts_per_page' => 8,
                        'order' => "asc",
                    ));
                    if ($author_page_here->have_posts()) : while ($author_page_here->have_posts()) : $author_page_here->the_post();

                    ?>
                            <!-- single author start -->
                            <div class="col-xl-3 col-sm-12 align-items-center">
                                <div class="about-single-author-start">
                                    <?php if (has_post_thumbnail()) {
                                        the_post_thumbnail('author-thumb-img');
                                    } ?>
                                    <a href="<?php the_permalink() ?>">
                                        <h4><?php the_title() ?></h4>
                                    </a>
                                    <p><?php $authou_role = get_post_meta(get_the_ID(), 'author_role', true);
                                        if (!empty($authou_role)) {
                                            echo esc_html($authou_role);
                                        };
                                        ?><a href="<?php echo esc_url(site_url()) ?>"><?php bloginfo('name') ?></a></p>
                                    <div class="pos-single-author-icon-area">
                                        <?php $author_social = get_post_meta(get_the_ID(), 'social_repeat_group', true);
                                        if (!empty($author_social)) : foreach ($author_social as $social_author) :
                                                if (isset($social_author['social_icon'])) {
                                                    $author_icon = esc_attr($social_author['social_icon']);
                                                };
                                                if (isset($social_author['social_link'])) {
                                                    $author_link = esc_url($social_author['social_link']);
                                                };
                                        ?>
                                                <a href="<?php echo $author_link; ?>"><i class="<?php echo $author_icon; ?>"></i></a>
                                        <?php endforeach;
                                        endif ?>
                                    </div>
                                </div>
                            </div>
                    <?php endwhile;
                    endif; ?>
                    <!-- single author end -->


                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- authors area end -->
    <!-- logo area start -->
    <section class="pos-logo-content-area">
        <div class="pos-logo-content">
            <div class="container">
                <div class="all-senal-logo">
                    <div class="row justify-content-center pos-heading-section">
                        <div class="col-xl-2">
                            <p class="m-0"><?php if(!empty(postonstart_get_option('brand-logo-text'))){
                                echo esc_html(postonstart_get_option('brand-logo-text'));
                            };?></p>
                            <h4 class="m-0"><?php if(!empty(postonstart_get_option('brand-logo-title'))){
                                echo esc_html(postonstart_get_option('brand-logo-title'));
                            };?></h4>
                        </div>
                        <div class="col-xl-10 d-flex justify-content-center align-items-center">
                            <div class="all-brand-single-img owl-carousel">
                                <?php $brand_logo = postonstart_get_option('brand-logo-repeater');
                                if(!empty($brand_logo)):foreach($brand_logo as $logo_brand):;?>
                                <img src="<?php echo esc_url($logo_brand['brand-logo-img']['url'])?>" alt="">
                                <?php endforeach;endif;?>                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- logo area end -->
    <!-- testimonial area star -->
    <section class="pos-testimonial-area">
        <div class="pos-testimonial">
            <div class="container">
                <div class="pos-testimonail-container-main">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="testimonial-heading-area pos-heading-section">
                                <h6><?php if(!empty(postonstart_get_option('testimonial-text'))){
                                echo esc_html(postonstart_get_option('testimonial-text'));
                            };?><h6>
                                <h2 class="mb-3"><?php if(!empty(postonstart_get_option('testimonial-title'))){
                                echo esc_html(postonstart_get_option('testimonial-title'));
                            };?></h2>
                                <p><?php if(!empty(postonstart_get_option('testimonial-content'))){
                                echo esc_html(postonstart_get_option('testimonial-content'));
                            };?></p>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="pos-testimonial-content-area owl-carousel pos-heading-section">
                                <!-- owl cerosel area start -->
                                <?php $testimonail = postonstart_get_option('testimonial-repeater');
                                if(!empty($testimonail)): foreach($testimonail as $slides):
                                ?>
                                <div class="pos-testimonial-single-cerosl">
                                    <h4><?php echo esc_html($slides['testimonial-title']);?></h4>
                                    <div class="pos-testimonial-footer-area">
                                        <div class="pos-testimonial-profile">
                                            <img src="<?php echo esc_html($slides['testimonial-img']['url']);?>" alt="">
                                            <div class="pos-testimonail-name">
                                                <h4><?php echo esc_html($slides['testimonial-name']);?></h4>
                                                <p><?php echo esc_html($slides['testimonial-adr']);?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- owl cerosel area end -->
                                <?php endforeach;endif;?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- testimonial area end -->
    <?php get_footer() ?>