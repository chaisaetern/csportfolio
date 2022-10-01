<?php
/**
 * Template Name: Home Page
 *
 * @package csportfolio
 *
 */
?>

<?php get_header(); ?>

<div class="home-page" id="fullpage">

    
    <!-- Landing Page -->
    <?php get_template_part('template-parts/landing-page'); ?>

    <!-- About Page -->
    <?php get_template_part('template-parts/about-page'); ?>
    
    <!-- Projects Page -->
    <?php get_template_part('template-parts/projects-page'); ?>
    


</div>

<?php get_footer(); ?>