<div class="page-wrap">

  <?php

    $the_query = new WP_Query(array(
      'post_type' => 'events',
      'posts_per_page' => -1,
      'orderby'   => 'menu_order'
    ));

    while ($the_query->have_posts()) :
      $the_query->the_post();
    ?>

    <article class="post event" id="post-<?php the_ID(); ?>">

      <time>
        <?php the_field('date_of_event'); ?>
      </time>

      <h2>

        <?php if (get_field('event_link')) { ?>

          <a href="<?php the_field('event_link'); ?>">
            <?php the_title(); ?>
          </a>

        <?php } else {  ?>

          <?php the_title(); ?>

        <?php } ?>

      </h2>

      <?php the_content(); ?>

      <dl>

        <dt>Hvor?</dt>
        <dd>
          <?php the_field('venue'); ?>
        </dd>
          
        <dt>Hvem?</dt>
        <dd>
          <?php if (get_field('participants')) { ?>
            <?php the_field('participants'); ?>
          <?php } ?>
        </dd>


      </dl>

    </article>

  <?php endwhile; ?>

</div>