<?php
/**
 * @package Pagee
 */
?>

<div class="inner_container margin-x-auto loop-post">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header hero-post">

		<?php
		if ( has_post_thumbnail() ) {
		?>
		<div class="post-thumbnail">
			<div class="inner">
				<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
				<?php the_post_thumbnail( 'wide-thumb' ); ?>
				</a>
			</div>
		</div><!-- /.post-thumbnail -->
		<?php
		}
		?>

		<div class="inner_container margin-x-auto">
			<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta pagee_card-metadata">
				<?php pagee_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</div>

	</header><!-- .entry-header -->


	<div class="inner_container margin-x-auto">
		<div class="entry-content">
			<?php
				/* translators: %s: Name of current post */
				the_content( sprintf(
					__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'pagee' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
			?>

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'pagee' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	</div>


</article><!-- #post-## -->

</div><!-- /.pagee__container -->
