<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package csportfolio
 */

?>

	<footer id="page4" class="page section site-footer">

		<div class="footer-message">

			<div class="footer-bg">
				<img src="<?php echo esc_url( the_field('footer_top_background') ); ?>" alt="">
				<img class="parallax" data-offset="50" src="<?php echo esc_url( the_field('footer_top_background_overlay') ); ?>" alt="">
				<img class="parallax" data-offset="25" src="<?php echo esc_url( the_field('footer_top_background_overlay_2') ); ?>" alt="">
			</div>

			<!-- <h1 class="parallax" data-offset="25">K, bye!</h1> -->

		</div>

		<div class="footer-bottom">

			<div class="footer-row">
				
				<div class="footer-socials">

					<h3><?php printf( esc_html_e( 'Socials', 'csportfolio' ) ); ?></h3>
					
					<a href="<?php echo '#'; ?>">
						<i class="fa-solid fa-square-envelope"></i>
						<span><?php printf( esc_html_e( 'Email', 'csportfolio' ) ); ?></span>
					</a>
					<a href="<?php echo esc_url( 'https://www.linkedin.com/in/csaetern530' ); ?>" target="_blank">
						<i class="fa-brands fa-linkedin"></i>
						<span><?php printf( esc_html_e( 'LinkedIn', 'csportfolio' ) ); ?></span>
					</a>
					<a href="<?php echo esc_url( 'https://github.com/chaisaetern' ); ?>" target="_blank">
						<i class="fa-brands fa-square-github"></i>
						<span><?php printf( esc_html__( '%s', 'csportfolio' ), 'GitHub' ); ?></span>
					</a>
				</div>
				
				<div class="footer-languages-used">
					<h3><?php printf( esc_html__( '%s', 'csportfolio' ), 'Built With' ); ?></h3>
					<p><span><?php printf( esc_html_e( '&#8627;' ) ); ?></span> <?php printf( esc_html_e( 'HTML', 'csportfolio' ) ); ?></p>
					<p><span><?php printf( esc_html_e( '&#8627;' ) ); ?></span> <?php printf( esc_html_e( 'SCSS', 'csportfolio' ) ); ?></p>
					<p><span><?php printf( esc_html_e( '&#8627;' ) ); ?></span> <?php printf( esc_html_e( 'JQ/jQuery', 'csportfolio' ) ); ?></p>
					<p><span><?php printf( esc_html_e( '&#8627;' ) ); ?></span> <?php printf( esc_html_e( 'PHP', 'csportfolio' ) ); ?></p>
					<p><span><?php printf( esc_html_e( '&#8627;' ) ); ?></span> <?php printf( esc_html_e( 'WordPress', 'csportfolio' ) ); ?></p>
				</div>

				<div class="footer-contact">
					<h3><?php printf( esc_html_e( 'Other', 'csportfolio' ) ); ?></h3>
					<a href="<?php echo esc_url( '#' ); ?>" target="_blank">
						<i class="fa-solid fa-file"></i>
						<span><?php printf( esc_html_e( 'Resumé', 'csportfolio' ) ); ?></span>
					</a>
					<a href="<?php echo esc_url( '#' ); ?>" target="_blank">
						<i class="fa-solid fa-bars-progress"></i>
						<span><?php printf( esc_html_e( 'Projects', 'csportfolio' ) ); ?></span>
					</a>
				</div>

			</div>

			<div class="site-info">
				<p><?php printf( esc_html_e( 'Copyright &copy;2022 Chai Saetern. All Rights Reserved.', 'csportfolio' ) ); ?></p>
			</div><!-- .site-info -->

		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


<!-- Flicktiy CDN -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<!-- Load Scrollify -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.21/jquery.scrollify.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.21/jquery.scrollify.js"></script>
</body>
</html>
