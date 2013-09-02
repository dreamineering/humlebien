<footer class="footer footer--page" role="contentinfo">
  <div class="footer--page--light">
    <div class="wrapper wrapper--footer">
      <?php dynamic_sidebar('sidebar-footer'); ?>
    </div>
  </div>

  <div class="footer--page--dark">
    <div class="wrapper wrapper--footer">
      <div class="grid">

        <div class="grid__item one-whole desk-one-half">
          <div class="vcard">
            <div class="vcard__address">
              <span class="adr">
                <h6>Addresse:</h6>
                <span class="street-address">Ceresvej 9</span><br>
                <span class="locality">Frederiksberg C</span>
                <span class="region"></span>
                <span class="postal-code">1863</span><br>
              </span>
            </div>
            <div class="vcard__tel">
              <h6>Telefon:</h6>
              <span class="tel"><span class="value">33 22 92 94</span></span><br>
            </div>
            <div class="vcard__email">
              <h6>Email:</h6>
              <a class="email" href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;tf=1&amp;to=humlebien@mail.dk" target="_blank">humlebien@mail.dk</a>        
            </div>
          </div>
        </div><!--
     --><div class="grid__item one-whole desk-one-third">
          <div class="open-time">
            <p>
              <span>Åbningstider</span><br>
              <span>Mandag - torsdag fra 7.30-17.00</span><br>
              <span>Fredag 7.30-16.00</span>
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>