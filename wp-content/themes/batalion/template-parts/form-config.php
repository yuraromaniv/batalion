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
	$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdpQygUAAAAAHbllt7tnD3iVVBEwHfp0PcU09Ln&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
	if ($response.success == false) {
		echo '<h2>You are spammer ! Get the @$%K out</h2>';
	}
	else {
    $recepient = "xxxmechanikxxx@gmail.com";
	  $sitename = "КОРПУС ДОБРОЇ ВОЛІ";

		$message = "Ім'я: $name \nПрізвище :$surname \nТелефон :$phone \nemail :$email \nТелефон: $phone";
		$pagetitle = "СТАТИ ЧЛЕНОМ \"$sitename\"";
		mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
    echo "Відправлено";
	}
	
?>