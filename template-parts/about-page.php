<?php
/**
 * Template Part Name: About Page
 *
 * @package csportfolio
 * 
 */
?>
<!-- About Page -->

<div class="about-page section page" id="page2" data-id="about">

    <!-- https://youtu.be/1tMAstgh4TU?list=PLZ2Ee0n3vmhNylAHcq065fSP6jWP3jRp- -->
    <video class="about-bg" autoplay muted loop>
        <source src="http://csportfolio.local/wp-content/uploads/2022/10/videoplayback.mp4" type="video/mp4">
        <!-- <source src="http://csportfolio.local/wp-content/uploads/2022/10/csgo_awp_ace_comp_unranked.mp4" type="video/mp4"> -->
        <!-- <source src="http://csportfolio.local/wp-content/uploads/2022/10/My-Movie.mp4" type="video/mp4"> -->
        Your browser does not support the video tag.
    </video>

    <?php get_template_part('template-parts/skills'); ?>

    <?php get_template_part('template-parts/hobbies'); ?>

</div>