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
      if ( $query->have_posts() ) {
        echo '
          <div class="col l6 m12 s12 border-color">
            <div class="partners-slogan">
              Партнери
            </div>
            <div class="carousel">';
            while ( $query->have_posts() ) {
              $query->the_post();
              echo '
              <a class="carousel-item" target="_blank" href="' . get_post_meta( $post->ID, "link_to_partner", true ) . '">
                <img src="' . get_the_post_thumbnail_url('' ,'medium') . '" alt="' . get_the_title() . '">
              </a>';
            } //end while
            echo '
            </div>
          </div>';
      } //end if
    ?>
    
    <div class="offset-l1 col l4 m12 s12">
      <div class="subs-slogan">Стати членом</div>
      <form class="center" id="callback-form">
        <input class="application-field" type="text" name="user_name" placeholder="Ім'я" required /><br />
        <input class="application-field" type="text" name="user_surname" placeholder="Прізвище" required /><br />
        <input class="application-field" type="tel" name="user_phone" placeholder="Номер телефону" required /><br />
        <input class="application-field" type="email" name="user_email" placeholder="E-mail" required /><br />
        <div class="g-recaptcha" data-sitekey="6LdpQygUAAAAAFEPYYDzWZKsS5q7hdpxFQNmjwsA"></div>
        <button id="callback-button1" class="applicationButton">НАДІСЛАТИ ЗАЯВКУ</button>
      </form>
      <span id="callback-form-message"></span>
    </div>
  </div>
</section>





