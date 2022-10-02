<?php
/**
 * Template Part Name: Landing Page
 *
 * @package csportfolio
 * 
 */
?>
<!-- Landing Page -->
<div class="landing-page section page" id="page1" data-id="landing">

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
    <div class="lp-left parallax">
        <p><span></span><?php printf( esc_html__( '%s', 'csportfolio' ), 'Welcome to my website.' ); ?></p>
        <h1><?php printf( esc_html__( '%s', 'csportfolio' ), 'PORTFOLIO' ); ?>
            <br>
            <?php printf( esc_html__( '%s', 'csportfolio' ), 'CHAI' ); ?>
        </h1>
        <a href="#"><?php printf( esc_html__( '%s', 'csportfolio' ), 'Scroll' ); ?>
            <br>
            <?php printf( esc_html__( '%s', 'csportfolio' ), 'Down' ); ?>
            <br>
            <i class="fa-solid fa-arrow-down-wide-short"></i>
        </a>
    </div>

        
    <!-- right Landing Page -->
    <div class="lp-right">

        <!-- Author -->
        <div class="lp-author parallax">

            <div class="lp-author-img-container">
                <img src="<?php the_field('author_image'); ?>" alt="Author">
            </div>

            <h5><?php printf( esc_html__( '%s', 'csportfolio' ), 'Chai Saetern' ); ?></h5>

            <p><?php printf( esc_html__( '%s', 'csportfolio' ), 'WordPress' ); ?></p>

            <p><?php printf( esc_html__( '%s', 'csportfolio' ), 'Front-End Developer' ); ?></p>

            <div class="lp-socials">
                <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                <a href=""><i class="fa-brands fa-github-alt"></i></a>
                <a href=""><i class="fa-solid fa-envelope"></i></a>
                <a href=""><i class="fa-brands fa-discord"></i></a>
                <a href=""><i class="fa-brands fa-steam-symbol"></i></a>
            </div>

        </div>


    </div>
    
</div>