<?php
/**
 * The template for displaying search results pages
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
<div class="searchResult"><?php printf( __( 'Search Results for: %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?> 
			
			 <!-- .page-header -->

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			// End the loop.
			endwhile;

			// Previous/next page navigation.


		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
		<?php
		echo easy_wp_pagenavigation(); 
		?>
	</div><!-- .content-area -->
<?php get_footer(); ?>
