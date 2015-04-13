<meta http-equiv='refresh' content='5; url=http://rushnyk.pp.ua/?page_id=26/'>
<meta charset="UTF-8" />
<?php
if (isset($_POST['name'])) {$name = $_POST['name']; if ($name == '') {unset($name);}}
if (isset($_POST['email'])) {$email = $_POST['email']; if ($email == '') {unset($email);}}
if (isset($_POST['tel'])) {$tel = $_POST['tel']; if ($tel == '') {unset($tel);}}
if (isset($_POST['body'])) {$body = $_POST['body']; if ($body == '') {unset($body);}}
if (isset($_POST['file'])) {$file = $_POST['file']; if ($file == '') {unset($file);}}
 
if (isset($name) && isset($email) && isset($tel) && isset($body) ){
 
$address = "annaonyschenko@gmail.com";
$mes = "Имя: $name \nE-mail: $email \nТема: $tel \nТекст: $body \nФайл: $file ";
$send = mail ($address,$tel,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
if ($send == 'true')
{echo "Повідомлення відправлено, зачекайте 5 секунд <a href='http://rushnyk.pp.ua/?page_id=26/'>Повернутися назад</a>";}
else {echo "Помилка, повідомлення не відправлено!";}
 
}
else
{
echo "Ви заповнили не всі поля, необхідно повернутися назад!";
}
?>