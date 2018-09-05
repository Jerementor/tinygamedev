<?php
  $defaults = array(
      'theme_location'  => 'logged-in',
      'menu'            => '',
      'container'       => '',
      'container_class' => '',
      'container_id'    => '',
      'menu_class'      => '',
      'menu_id'         => '',
      'echo'            => false,
      'fallback_cb'     => 'wp_page_menu',
      'before'          => '',
      'after'           => '',
      'link_before'     => '',
      'link_after'      => '',
      'items_wrap'      => '<nav id="%1$s" class="%2$s">%3$s </nav>',
      'depth'           => 0,
      'walker'          => ''
  );
  
  $find = array('><a', '<li');
  $replace = array('', '<a class="navlink w-nav-link"');
  
  echo str_replace($find, $replace, wp_nav_menu( $defaults ));
?>   