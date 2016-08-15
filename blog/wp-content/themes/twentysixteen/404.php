<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<div class="pageTop">
	<div class="category">  
		<input type="checkbox" name="select" value="" id="categorySelect"/> 
		<label class="categoryTitle" for="categorySelect">All Posts</label>
		<div class="categoryOptions">
			<div class="scrollY">
		<?php
	global $wpdb;
	$request = "SELECT $wpdb->terms.term_id, name FROM $wpdb->terms ";
	$request .= " LEFT JOIN $wpdb->term_taxonomy ON $wpdb->term_taxonomy.term_id = $wpdb->terms.term_id ";
	$request .= " WHERE $wpdb->term_taxonomy.taxonomy = 'category' ";
	$request .= " ORDER BY term_id asc";
	$categorys = $wpdb->get_results($request);
	foreach ($categorys as $category) {
	 ?>
		<a href="<?php echo get_category_link($category->term_id);?>"><?php echo $category->name;?></a>

	<?php }
?>
	</div>
	</div>
	</div>
<?php include 'searchform.php'?>
</div>
	<div id="primary" class="content-area"> 

			<div class="no-results not-found"> 
					 <?php _e( 'Oops! That page can&rsquo;t be found.', 'twentysixteen' ); ?>
			</div><!-- .error-404 -->
 

		<?php get_sidebar( 'content-bottom' ); ?>

	</div><!-- .content-area -->

 
<?php get_footer(); ?>
