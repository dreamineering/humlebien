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

  <div class="cta">
    <div class="grid">
      <div class="grid__item one-whole">
        <h2>Komme til rundvisning</h2>
      </div>
      <div class="grid__item one-whole desk-one-half">
        <p> 
          Der er afsat ½ time til rundvisning hver onsdag kl. 9.30. 
          Venligst kom til tiden, så alle får det hele med fra starten. Det er ikke nødvendigt at aftale rundvisningen på forhånd.
        </p>
      </div><!--
    --><div class="grid__item one-whole desk-one-half">
        <p>Har du mere spørgsmål? du er velkommen til at</p>
        <a href="kontakt" class="btn btn--full btn--cta">siger hej</a>
      </div>
    </div>
  </div>

  <?php
    // <div class="island">
    //   <div class="img-wrap"></div>

        //       $the_query = new WP_Query('posts_per_page=2');
        //       while ($the_query->have_posts()) :
        //         $the_query->the_post();
        //         echo '<h3>' . get_the_title() . '</h3>';
        //         echo '<p>' . get_the_excerpt() . '</p>';
        //       endwhile;

    // </div>
  ?>

  <div class="grid">

    <div class="grid__item one-whole">
      <h2>Kommende arrangementer</h2>
    </div> 

    <?php

      $the_query = new WP_Query(array(
        'post_type' => 'events',
        'posts_per_page' => 3,
        'orderby'   => 'menu_order'
      ));

      while ($the_query->have_posts()) :
        $the_query->the_post();
      ?>

    <article class="post event" id="post-<?php the_ID(); ?>">

      <div class="grid__item one-whole desk-two-thirds">
        <h3><?php the_title(); ?></h3>
        <p><?php the_content(); ?></p>
      </div><!-- 
   --><div class="grid__item one-whole desk-one-third">
        <h6>Placering</h6>   
        <p>
          <?php if (get_field('event_link')) { ?>
            <a href="<?php the_field('event_link'); ?>">
              <?php the_field('venue'); ?>
            </a>
          <?php } else {  ?>
            <?php if (get_field('venue')) { ?>
              <?php the_field('venue'); ?>
            <?php } ?>
          <?php } ?>
        </p>

        <h6>Dato</h6> 
        <time>
          <?php 
            $date = DateTime::createFromFormat('Ymd', get_field('date_of_event'));
            echo $date->format('jS F Y');
          ?>
        </time>

        <h6>Hvem</h6>   
        <p>
          <?php if (get_field('participants')) { ?>
            <?php the_field('participants'); ?>
          <?php } ?>
        </p>
      </div>
    </article>

    <?php endwhile; ?>

  </div>

  <?php wp_link_pages(array('before' => '<nav class="nav pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>