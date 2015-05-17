<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Pagee
 */
?>

<div class="inner_container margin-x-auto loop-post">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="inner_container margin-x-auto">

		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

	</div><!-- /.inner_container -->

	<div class="inner_container margin-x-auto">
		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'pagee' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php edit_post_link( __( 'Edit', 'pagee' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-footer -->
	</div><!-- /.inner_container -->

</article><!-- #post-## -->

</div>
