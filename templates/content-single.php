<?php while (have_posts()) : the_post(); ?>
  <article class="single" <?php post_class(); ?>>
    <header class="single__header">
      <h1 class="single__title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="single__content">
      <?php the_content(); ?>
    </div>
    <footer class="single__footer">
      <?php wp_link_pages(array('before' => '<nav class="footer__nav--single"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
