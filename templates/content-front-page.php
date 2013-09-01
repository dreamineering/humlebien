<?php while (have_posts()) : the_post(); ?>
  <div class="grid">
    <div class="grid__item one-whole desk-one-third">
      <img src="assets/img/honeybee.png" alt="">
    </div><!--
    --><div class="grid__item one-whole desk-two-thirds">
      <?php the_content(); ?> 
    </div>

  </div>
  <?php wp_link_pages(array('before' => '<nav class="nav pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>