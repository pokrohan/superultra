<?php
/**
* Template Name: Home Page
*/

get_header();

?>

<!-- Banner Section -->
<?php do_action( 'su_banner' ); ?>


<!-- About Section -->

<section id="about_section" class="about-section container">
    <div class="row">
        <?php dynamic_sidebar('superultra-about'); ?>
    </div>
</section>

<!-- Client Section -->
<section id="client_section" class="client-section container">
    <div class="row">
        <?php dynamic_sidebar('superultra-client'); ?>
    </div>
</section>

<!-- Service Section -->
<section id="service_section" class="service-section container">
    <div class="row">
        <?php dynamic_sidebar('superultra-service'); ?>
    </div>
</section>

<!-- Blogs Section -->
<section id="blogs_section" class="blogs-section container">
    <div class="row">
        <div class="col-md-9">
                <?php get_template_part( 'template-parts/content', 'custom-blogs'); ?>
        </div>
        <div class="col-md-3">
            <?php dynamic_sidebar('right-sidebar'); ?>
        </div>
    </div>
</section>


<!-- Subscribe Section -->
<section id="subscribe_section" class="subscribe-section container">
    <div class="row">
        <?php dynamic_sidebar('superultra-subscribe'); ?>
    </div>
</section>

<?php get_footer();
