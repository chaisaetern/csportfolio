<?php
/**
 * Template Name: Home Page
 *
 * @package csportfolio
 *
 */
?>

<?php get_header(); ?>

<div class="home-page" id="full-page">

    <!-- Landing Page -->
    <?php get_template_part('template-parts/landing-page'); ?>

    <!-- About Page -->
    <?php get_template_part('template-parts/about-page'); ?>
    
    <!-- Projects Page -->
    <?php get_template_part('template-parts/projects-page'); ?>


    
    <!-- Pagination for Scrolling -->
    <?php get_template_part('template-parts/pagination'); ?>
    
</div>

<?php get_footer(); ?>