<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Pagee
 */
?>

<div class="inner_container margin-x-auto loop-post">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header hero-post">

		<div class="inner_container margin-x-auto">
			<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta pagee_card-metadata">
				<?php pagee_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</div>

	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->


</article><!-- #post-## -->

</div>
