<?php 
/*
 * Template Name: Privacy
*/
get_header()
?>

<!-- privacy main area start-->
<main>
    <!-- privacy hero section start -->
    <section class="privacy-hero-area"
        style="padding: 80px; background: url(<?php echo get_template_directory_uri()?>/asset/img/blog/blog-hero-bg.png) no-repeat center / cover;">
        <div class="container text-center">
            <div class="row ">
                <div class="col-12">
                    <h1>Privacy Policy</h1>
                    <p>Last Updated on 27th January 2022</p>
                </div>
            </div>
        </div>
    </section>
    <!-- praivacy contant area start -->
    <section class="privacy-contant-area">
        <div class="contact-container text-center">
            <div class="row">
                <div class="col-12">
                  <?php the_content()?>
                </div>
            </div>
        </div>
    </section>
    <!-- praivacy contant area end -->
</main>
<!-- privacy main area end-->
<?php get_footer()?>