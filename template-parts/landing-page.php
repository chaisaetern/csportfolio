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
    
    <div class="pallet-container">
        <div class="pallet"></div>
        <div class="pallet"></div>
        <div class="pallet"></div>
        <div class="pallet"></div>
    </div>

    <!-- Left Landing Page -->
    <div class="lp-left">
        <p>Welcome to my website.</p>
        <h1>LANDING <br><span><i class="fa-solid fa-arrow-right"></i></span>PAGE</h1>
    </div>
        
    <!-- right Landing Page -->
    <div class="lp-right">
        <div class="lp-img-container">
            <img src="<?php the_field('landing-page-image'); ?>" alt="">
        </div>
    </div>
    
</div>