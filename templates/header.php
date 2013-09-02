<header class="banner" role="banner">
  <div class="wrapper" >
    <h1 class="visuallyhidden">Humlebien Børnehuset Frederiksberg</h1>
    <p class="banner__service">Børnehuset</p>
    <a class="brand brand--banner" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    <p class="banner__location">Frederiksberg</p>
    <nav class="banner__nav" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav--banner'));
        endif;
      ?>
    </nav>
  </div>
</header>