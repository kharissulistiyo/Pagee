<?php
/**
 * @package Pagee
 */
?>


<?php

$args = array(
	'post_type'		=> 'post',
);

$posts_array = get_posts( $args );

if( $posts_array ) :

	$count = 0;

	foreach($posts_array as $post) : setup_postdata($post);

	if( is_sticky(get_the_id()) ){

?>

<div class="inner_container_wide margin-x-auto sticky-post-top">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="pagee__row">

			<div class="pagee__grid pagee__grid-12">

				<?php
				if ( has_post_thumbnail() ) {
				?>
				<div class="post-thumbnail">
					<div class="inner">
						<a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo esc_attr(get_the_title()); ?>">
							<?php the_post_thumbnail( 'post-thumbnail-featured' ); ?>
						</a>
					</div>
				</div><!-- /.post-thumbnail -->
				<?php
				}
				?>

				<div class="post-excerpt">

					<header class="entry-header">
						<?php the_title( sprintf( '<h1 class="entry-title has-post-label"><span class="post-label sticky">Featured</span><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

						<?php if ( 'post' == get_post_type() ) : ?>
						<div class="entry-meta pagee_card-metadata">
							<?php pagee_posted_on(); ?>
						</div><!-- .entry-meta -->
						<?php endif; ?>
					</header><!-- .entry-header -->

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

					<footer class="entry-footer">
						<?php // pagee_entry_footer(); ?>
					</footer><!-- .entry-footer -->

				</div><!-- /.post-excerpt -->


			</div><!-- /pagee__grid-12 -->

		</div><!-- /.pagee__row -->

	</article><!-- #post-## -->


</div><!-- /.inner_container -->


<?php

} // End of sticky check
endforeach;
endif; ?>
