<?php while (have_posts()) : the_post(); ?>
  <div class="grid grid--rev">
    <div class="grid__item one-whole desk-two-thirds">
      <div class="content content--front-page">
         <?php the_content(); ?>      
      </div>
    </div><!--
 --><div class="grid__item one-whole desk-one-third">
      <div class="logo">
        <img src="assets/img/honeybee.png" class="logo__img" alt="">  
      </div>
    </div>
  </div>

  <div class="island island--cta">
    <div class="grid">
      <div class="grid__item one-whole desk-one-half">
        <h3>
          Har vi plads i bikuben for dine børn.
        </h3>
      </div><!--
    --><div class="grid__item one-whole desk-one-half">
        <a class="btn btn--cta">Join waiting list</a>
      </div>
    </div>
  </div>

  <div class="grid">
    <div class="grid__item one-whole desk-one-half">
      <h2>Coming Events</h2>
    </div><!--
  --><div class="grid__item one-whole desk-one-half">
      <h2>Latest Buzz</h2>
        <?php
            $the_query = new WP_Query('posts_per_page=2');
            while ($the_query->have_posts()) :
              $the_query->the_post();
              echo '<h3>' . get_the_title() . '</h3>';
              echo '<p>' . get_the_excerpt() . '</p>';
            endwhile;
        ?>
    </div>
  </div>

  <?php wp_link_pages(array('before' => '<nav class="nav pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>