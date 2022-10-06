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

    <!-- https://youtu.be/1tMAstgh4TU?list=PLZ2Ee0n3vmhNylAHcq065fSP6jWP3jRp- -->
    <video class="landing-bg" autoplay muted loop>
        <source src="<?php echo esc_url( 'https://chaisaetern.tech/wp-content/uploads/2022/10/videoplayback2.mp4' ); ?>" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Left Landing Page -->
    <div class="lp-left parallax" data-offset="20">

        <h2>
            <!-- <span></span> -->
            <?php printf( esc_html_e( 'Hello, my name is', 'csportfolio' ) ); ?>
        </h2>

        <h1>

            <?php printf( esc_html_e( 'CHAI', 'csportfolio' ) ); ?>
        
            <br>
        
            <?php printf( esc_html_e( 'SAETERN', 'csportfolio' ) ); ?>

        </h1>

    </div>

        
    <!-- right Landing Page -->
    <div class="lp-right">

        <!-- Author -->
        <div class="lp-author">

            <div class="lp-author-img-container glow">

                <img src="<?php echo esc_url( the_field('author_image') ); ?>" alt="Author">

            </div>

            <p><?php printf( esc_html_e( 'WordPress', 'csportfolio' ) ); ?></p>

            <p><?php printf( esc_html_e( 'Front-End Developer', 'csportfolio' ) ); ?></p>

            <div class="lp-socials">

                <a href="<?php echo esc_url( 'https://www.linkedin.com/in/csaetern530' ); ?>" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>

                <a href="<?php echo esc_url( 'https://github.com/chaisaetern' ); ?>" target="_blank"><i class="fa-brands fa-github-alt"></i></a>

                <a href="<?php echo esc_url( '#' ); ?>" target="_blank"><i class="fa-solid fa-envelope"></i></a>

            </div>

        </div>

    </div>
    
</div>