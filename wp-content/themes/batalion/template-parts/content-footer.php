<div class="pre-post"></div>
<section>
  <div style="margin-bottom: 0" class="row center tablet-fix-overflow">
    <?php
      //ПАРТНЕРИ
      $args = array(
        'post_type' => array('partners'),
        'publish' => true,
        'orderby' => 'date',
        'order' => 'DESC'
      );
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) { ?>
        <div class="col l6 m12 s12 border-color">
          <div class="partners-slogan">Партнери</div>
          <div class="carousel">
          <?php
          while ( $query->have_posts() ) {
            $query->the_post(); ?>
            <a class="carousel-item" target="_blank" href="<?php echo get_post_meta( $post->ID, "link_to_partner", true ); ?>">
              <img src="<?php the_post_thumbnail_url('' ,'medium'); ?>" alt="<?php the_title(); ?>">
            </a>
          <?php
          } //end while
          ?>
          </div>
        </div>
      <?php
      } //end if
      wp_reset_postdata();
    ?>
    
    <div class="offset-l1 col l4 m12 s12">
      <div class="subs-slogan">Стати членом</div>
      <form id="callback-form" class="center">
        <input class="application-field" type="text" name="user_name" placeholder="Ім'я" required /><br />
        <input class="application-field" type="text" name="user_surname" placeholder="Прізвище" required /><br />
        <input class="application-field" type="tel" name="user_phone" placeholder="Номер телефону" required /><br />
        <input class="application-field" type="email" name="user_email" placeholder="E-mail" required /><br />
        <input class="application-field" type="number" name="user_age" min="15" placeholder="Ваш вік" required /><br />
        <div class="g-recaptcha" data-sitekey="6Ld1jysUAAAAAN5vTUiLkkEZO7fHM5WmApT6WNHc"></div>
        <?php
          /*
          reCAPTCHA invisible
          <button id="callback-button1" class="applicationButton g-recaptcha" data-sitekey="6LdEqCsUAAAAAJlJ39G6oBOLcdWL6lFlmBDpgTHO" data-callback="after_invis_activated">
          */
        ?>
        <button id="callback-button1" class="applicationButton">НАДІСЛАТИ ЗАЯВКУ</button>
      </form>
      <span id="callback-form-message"></span>
    </div>
  </div>
</section>





