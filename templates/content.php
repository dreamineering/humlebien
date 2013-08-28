<article class="entry" <?php post_class(); ?>>
  <header class="entry__header">
    <h2 class="entry__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry__summary">
    <?php the_excerpt(); ?>
  </div>
</article>
