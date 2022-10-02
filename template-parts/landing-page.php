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
        <source src="https://chaisaetern.tech/wp-content/uploads/2022/10/videoplayback2.mp4" type="video/mp4">
        <!-- <source src="http://csportfolio.local/wp-content/uploads/2022/10/csgo_awp_ace_comp_unranked.mp4" type="video/mp4"> -->
        <!-- <source src="http://csportfolio.local/wp-content/uploads/2022/10/My-Movie.mp4" type="video/mp4"> -->
        Your browser does not support the video tag.
    </video>

    <!-- Left Landing Page -->
    <div class="lp-left parallax" data-offset="20">
        <p><span></span><?php printf( esc_html__( '%s', 'csportfolio' ), 'Welcome to my website.' ); ?></p>
        <h1 class><?php printf( esc_html__( '%s', 'csportfolio' ), 'PORTFOLIO' ); ?>
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
        <div class="lp-author">

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