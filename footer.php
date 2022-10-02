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
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'csportfolio' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'csportfolio' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'csportfolio' ), 'csportfolio', '<a href="https://chaisaetern.tech">Chai Saetern</a>' );
				?>
		</div><!-- .site-info -->
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
