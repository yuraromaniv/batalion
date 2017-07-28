<?php
  //header
  get_header();
?>

<!-- donats section -->
<section class="container">
  <div class="row">
    <div class="col l12 m12 s12 center">
      <div class="donats-slogan">внески та пожертвування</div>
    </div>
    <div class="col l12 m12 s12">
    	<div class="donats-info">Інформація про внески та пожертування подається кожного другого числа нового місяця.</div>
    </div>
  </div>
  <div class="row">
    <div class="col l8 m7 s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#test1">Членські внески</a></li>
        <li class="tab col s3"><a href="#test2">Пожертвування</a></li>
      </ul>

    <div class="row">
    <div id="test1" class="col s12">
    	      <table class="highlight striped bordered">
        <thead>
          <tr>
              <th>Прізвище Ім’я По-батькові</th>
              <th>Членський внесок</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Стефанюк Олег Володимирович</td>
            <td>250 грн.</td>
          </tr>
          <tr>
            <td>Стефанюк Олег Володимирович</td>
            <td>250 грн.</td>
          </tr>
          <tr>
            <td>Стефанюк Олег Володимирович</td>
            <td>250 грн.</td>
          </tr>
          <tr>
            <td>Стефанюк Олег Володимирович</td>
            <td>250 грн.</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div id="test2" class="col s12">
    	    	      <table class="highlight striped bordered">
        <thead>
          <tr>
              <th>Прізвище Ім’я По-батькові</th>
              <th>Пожертування</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Стефанюк Олег Володимирович</td>
            <td>250 грн.</td>
          </tr>
          <tr>
            <td>Стефанюк Олег Володимирович</td>
            <td>250 грн.</td>
          </tr>
          <tr>
            <td>Стефанюк Олег Володимирович</td>
            <td>250 грн.</td>
          </tr>
          <tr>
            <td>Стефанюк Олег Володимирович</td>
            <td>250 грн.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  </div>
  	<div class="col l4 m5 s12">
  		<div class="datepicker-here" data-language='ru' id="airdatepicker"></div>
  	</div>
      </div>
</section>

  

<?php
  //our team
  get_template_part('/template-parts/content', 'our-team');

  //content-footer
  get_template_part('/template-parts/content', 'footer');

  //footer
  get_footer();
?>