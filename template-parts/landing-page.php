<?php
/**
 * Template Part Name: Landing Page
 *
 * @package csportfolio
 * 
 */
?>
<!-- Landing Page -->
<div class="landing-page">

<!-- Calls Block Post (Using for video background) -->
<?php

    while ( have_posts() ) :
        the_post();
        
        get_template_part( 'template-parts/content', 'page' );
        
        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
        
    endwhile; // End of the loop.

?>

    <!-- Left Landing Page -->
    <div class="lp-left">
        <p><span></span>Welcome to my website.</p>
        <h1>PORTFOLIO<br>*CS</h1>
        <a href="#">Scroll Down <i class="fa-solid fa-arrow-down-wide-short"></i></a>
    </div>

        
    <!-- right Landing Page -->
    <div class="lp-right">
        <div class="lp-img-container">
            <img src="<?php the_field('landing_page_image'); ?>" alt="">
        </div>
    </div>
    
</div>