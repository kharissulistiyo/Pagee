<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Pagee
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer pagee__container" role="contentinfo">

		<div class="inner_container_wide margin-x-auto">

			<div class="site-info">
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'pagee' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'pagee' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'pagee' ), 'Pagee', '<a href="https://dev.risbl.org/" rel="designer">Risbl</a>' ); ?>
			</div><!-- .site-info -->

		</div><!-- /.inner_container -->

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
