<?php 
/**
 * The template for displaying all blog posts
 *
 *
 * @package Platformer
 * @since 1.0
 */
get_header(); 
?>

<!--SINGLE.PHP-->

<div class="p-0">
<div class="w-container">
<div class="blog-card">
<h1 class="post-header"><?php wp_title(''); ?></h1>
<div class="post-category">
	<?php the_category(' ', 'multiple')?>
</div>

<?php 
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
			//
			the_content();
			//
		} // end while
	} // end if
?>
</div>
</div>
</div>

<?php get_footer(); ?>