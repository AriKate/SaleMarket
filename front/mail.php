<?php

$recepient = "fu.kate97@gmail.com";
$sitename = "LNU";

$phone = trim($_POST["phone"]);

$message = "Ім'я: $name";

$pagetitle = "Нове повідомлення з сайту \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");