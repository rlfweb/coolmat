<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coolmat
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
<!-- copyright info with current year -->
			<div class="footer-copyright">
			&copy; <?php echo date("Y"); ?> cool mat. All Rights Reserved
			</div>
<!-- social media links -->
			<div class="footer-social">
			<!-- facebook icon -->
				<a href="https://facebook.com/coolmat" class="social-link"> 
					<img src="<?php bloginfo('template_url'); ?>/assets/facebook-icon.svg"> </a>
				<!-- instagram icon -->
				<a href="https://instagram.com/coolmat" class="social-link">
					<img src="<?php bloginfo('template_url'); ?>/assets/instagram-icon.svg"> 
				</a>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
<a href=""></a>