<header class="banner navbar navbar--default navbar--static-top" role="banner">
  <div class="wrapper">
    <div class="navbar__header">
      <button type="button" class="navbar__toggle" data-toggle="collapse" data-target=".navbar--collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="brand brand--navbar" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    </div>

    <nav class="navbar__collapse navbar--collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav--navbar'));
        endif;
      ?>
    </nav>
  </div>
</header>
