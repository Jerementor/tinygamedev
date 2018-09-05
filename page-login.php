<?php 
/**
 * The template for displaying all pages
 * Template Name: Page Login
 *
 * @since 1.0
 */
get_header(); 
?>
<!--PAGE LOGIN-->
<div class="p-10">
<div class="w-container">
<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 

		the_content();
	
	} // end while
} // end if
?>
</div>
</div>

<?php get_footer(); ?>