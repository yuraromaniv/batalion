<?php
	$question_text = trim($_POST["question_text"]);
	
	$recepient = "goodwillcorps.info@gmail.com";
	$sitename = "КОРПУС ДОБРОЇ ВОЛІ";

	$message = "Запитання: $question_text";
	$pagetitle = "Залиште ваше запитання! \"$sitename\"";
	mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
	echo "Відправлено";
	
?>