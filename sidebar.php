<?php
/**
 * The sidebar
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @version 1.0.0
 */
?>
   
<div class="get-post-info">
        <!--edit above div if fails-->
        <aside id="secondary" role="complementary">
                <?php if(is_active_sidebar('article-sidebar')) : ?>
                    <?php dynamic_sidebar('article-sidebar'); ?>
                <?php endif; ?>
        </aside>   
</div>
