<?php 
/**
 * The template for the index page
 *
 * @since 1.0
 */
get_header(); 
?>
<!--INDEX-->
<div class="p-80">
<div class="w-container">
<h1 class="blog-header">Category: <?php single_cat_title(); ?></h1>
<div class="w-row">
<div class="w-col w-col-8">
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
    <?php $author = get_the_author(); ?> 
	<?php $thumbnail_id = get_the_author_meta('ID'); ?>
  <div class="card">
    <div class="post-card-head">
      <?php the_title( '<h4 class="post-card-header">', '</h4>'); ?>
    </div>
    <div class="post-card-desc">
       <?php the_excerpt('<p class="post-card-text-desc">', '</p>'); ?>
    </div>
    <div class="post-card-meta">
      <div class="w-row">
        <div class="w-col w-col-2">
        	<?php echo get_avatar($thumbnail_id, 48, $default, $alt, array( 'class' => array( 'img-author') )); ?>
        </div>
        <div class="w-col w-col-6">
          <h4 class="heading-6"><?php echo $author ?></h4>
          <div><?php the_time('F jS'); ?> </div>
        </div>
        <div class="w-col w-col-4">
          <div class="button-center"><a href="<?php the_permalink(); ?>" class="button-dim w-button">View Tutorial</a></div>
        </div>
      </div>
    </div>
  </div>
   <?php endwhile; ?>
    <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
    <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
    
    <?php else : ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>	    
           
</div>
    
<div class="w-col w-col-4">
  <div class="card">
    <div class="p-20">
      <h3>Categories</h3>
    	<?php get_sidebar('article-sidebar'); ?>	
    </div>
   </div>
</div>
</div>
</div>
</div>
  


<?php get_footer(); ?>