<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<div class="pageTop"><a href="javascript:void(0)" onclick="javascript:history.back(-1);" class="goBack">Go Back</a></div>
<div id="primary" class="content-area clearfix"> 
		<div class="col-ms-8">
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				// Include the single post content template.
				get_template_part( 'template-parts/content', 'single' );


				// End of the loop.
			endwhile;
			?>
		</div>
		<div class="col-ms-4">
			<?php get_sidebar( 'content-bottom' ); ?>
			<?php get_sidebar(); ?>
		</div>  
</div><!-- .content-area -->
 
<?php get_footer(); ?>
