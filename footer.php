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

	<footer id="footer" class="page section site-footer">

		<div class="footer-message">

			<div class="footer-bg">
				<img src="<?php the_field('footer_top_background'); ?>" alt="">
				<img class="parallax" data-offset="50" src="<?php the_field('footer_top_background_overlay'); ?>" alt="">
				<img class="parallax" data-offset="25" src="<?php the_field('footer_top_background_overlay_2'); ?>" alt="">
			</div>

			<!-- <h1 class="parallax" data-offset="25">K, bye!</h1> -->

		</div>

		<div class="footer-bottom">

			<div class="footer-row">
				
				<div class="footer-languages-used">
					<h3>Built With</h3>
					<p><span>↳</span> HTML</p>
					<p><span>↳</span> SCSS</p>
					<p><span>↳</span> JS/jQuery</p>
					<p><span>↳</span> PHP</p>
					<p><span>↳</span> WordPress</p>
				</div>

				<div class="footer-socials">
					<h3>Socials</h3>
					<!-- Star Symbol (✯) === &#x272f; -->
					<a href="#">Email</a>
					<a href="#">LinkedIn</a>
					<a href="#">Github</i></a>
					<a href="#">Discord</i></a>
				</div>
				
				<div class="footer-contact">
					<h3>Other</h3>
					<a href="#">Resumé</a>
					<a href="#">Projects</a>
				</div>

			</div>

			<div class="site-info">
				<p>Copyright &copy;2022 Chai Saetern. All Rights Reserved.</p>
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
