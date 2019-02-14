<?php


$dbname='tour';
$host='localhost';
$user='ghost';
$password='qwerty';
$port='21112';

$db = new PDO("mysql:host=$host;dbname=$dbname;port=$port",$user,$password);

if (!$db) {
  echo "Произошла ошибка";
  exit;
}
else {
    echo "Успешно подключено";
}

