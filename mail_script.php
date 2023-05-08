<?php
$name = $_POST['name'];
$email = $_POST['e-mail'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);

$name = urlencode($name);
$email = urlencode($email);

$name = trim($name);
$email = trim($email);

if (mail("to_mail@mail.ru",
     "Pest Reject",
     "Имя: ".$name."\n".
     "Телефон ".$tel,
     "From: script@mail.ru \r\n")
){
     header("Location: /thank_you.html");
}

else {
     echo ("Error");
}

?>