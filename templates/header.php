<header class="banner" role="banner">
  <div class="wrapper" >
    <a class="brand brand--banner" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    <nav class="banner__nav" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav--banner'));
        endif;
      ?>
    </nav>
  </div>
</header>