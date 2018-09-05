<?php 
/**
 * The template for the index page
 *
 * 
 * @since 1.0
 */
get_header(); 
?>

<!--PAGE-->
<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		the_content();
	} 
} 
?>

<?php get_footer(); ?>