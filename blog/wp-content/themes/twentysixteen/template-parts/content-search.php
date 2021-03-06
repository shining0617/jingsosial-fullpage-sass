<?php
/**
 * The template part for displaying results in search pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<?php if ( 'post' === get_post_type() ) : ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
		<?php the_post_thumbnail(array(388,200));?>
	</a>
	<div class="post-entry">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<span class="posted-on">
		<?php echo get_the_date()?> by <?php the_author()?>
	</span>
		<?php twentysixteen_excerpt(); ?>



		<footer class="entry-footer">
			<?php //twentysixteen_entry_meta(); ?>
			<?php
			if ( 'post' === get_post_type() ) {
				twentysixteen_entry_taxonomies();
			}
			?>
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
</article><!-- #post-## -->
<?php endif; ?>