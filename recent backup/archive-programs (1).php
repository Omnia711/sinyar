<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package amani
 */

get_header('special');
?>
<!-- Start Page Title Area -->
<div class="page-title-area" style="background-image: url('<?php the_field('بريد_كرمب_الارشيف' ,'option'); ?>);">
    <div class="container">
        <div class="page-title-content">
            <h2><?php _e('[:en]All Programs[:ar]كل البرامج'); ?></h2>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Exclusive Area -->
<section class="exclusive-area exclusive-area-two pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span><?php _e('[:en]Exclusive Offers[:ar]عروض حصرية'); ?></span>
            <h2><?php _e('[:en]You can get an exclusive offer [:ar]تعرف علي آخر العروض الحصرية'); ?></h2>
        </div>
        <div class="row">
            <?php
                query_posts(array(
                    'post_type'  => 'programs',
                    
                ));?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-lg-6 col-md-6">
                <div class="exclusive-wrap">
                    <div class="row">
                        <div class="col-lg-7 pr-0">
                            <div class="exclusive-img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        </div>
                        <div class="col-lg-5 pl-0">
                            <div class="exclusive-content">
                                <span class="title"><?php the_field('قيمة_الخصم_في_الرئيسية'); ?></span>
                                <h3><?php the_title() ; ?></h3>
                                <div class="product-details-area">
                                    <div class="product-details-desc">
                                        <div class="price home-offer-p">
                                            <span class="new-price"><?php the_field('السعر_الاساسي'); ?></span>
                                            <span class="old-price"><?php the_field('سعر_التخفيض'); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <p><?php echo wp_trim_words(get_the_content(), 10, '...'); ?></p>
                                <a href="<?php the_permalink(); ?>" class="default-btn">
                                    <?php _e('[:en]program details[:ar]تفاصيل البرنامج'); ?>
                                    <i class="flaticon-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile;
                else : endif;
                wp_reset_query(); 
            ?>

        </div>
    </div>
</section>
<!-- End Exclusive Area -->



<?php get_footer(); ?>