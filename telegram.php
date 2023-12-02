<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */


$color = $_POST['color'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$pynkt = $_POST['pynkt'];
$otdelenya = $_POST['otdelenya'];

$token = "6165109761:AAEDOrPY1YkcO9vXRxwtJgR0IEfNVCaBwPg";
$chat_id = "-856203110";
$arr = array(
  'Цвет: ' => $color,
  'ФИО пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Населенный пункт: ' => $pynkt,
  'Номер отделения Новой Почты: ' => $otdelenya,
  
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");


if ($sendToTelegram) {
  header('Location: thanks.html');
} else {
  echo "Error";
}
?>