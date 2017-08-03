<?php
  $name = trim($_POST["user_name"]);
  $surname = trim($_POST["user_surname"]);
  $phone = trim($_POST["user_phone"]);
  $email = trim($_POST["user_email"]);
  
  //check capcha
  if ( isset($_POST['g-recaptcha-response']) ) {
    $captcha = $_POST['g-recaptcha-response'];
  }
  if (!$captcha) {
    echo 'Будь ласка, перевірте форму CAPTCHA.';
    exit;
  }
  /*
  reCAPTCHA invisible
  $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdEqCsUAAAAACTKjKdkTmO98oEnePEi2HKTBpcD&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
  */
  $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Ld1jysUAAAAAD5Dr8SbI8XNaUiiBOpBTRpQULae&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
  if ($response.success == false) {
    echo '<h2>You are spammer ! Get the @$%K out</h2>';
  }
  else {
    $recepient = "goodwillcorps.info@gmail.com";
    $sitename = "КОРПУС ДОБРОЇ ВОЛІ";
    $message = "Ім'я: $name \nПрізвище :$surname \nТелефон :$phone \nemail :$email \nТелефон: $phone";
    $pagetitle = "СТАТИ ЧЛЕНОМ \"$sitename\"";
    mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
    echo "Відправлено";
  }
  
?>