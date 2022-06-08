<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>User's Data By Email</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/get_userdata.css">
</head>
<body>
<?php
  
  $email = $_POST['email'];
  $file = 'data/' . $email . '.txt';
  if (($email === '') or ($email === null)) {
    echo 'ОШИБКА: Email не может быть пустым';
    exit;
  }
  if (!file_exists($file)) {
    echo '<h1 class="userdata-error__title"> Данного файла не существует </h1>';
    exit;
  }
  $content = file_get_contents('data/' . $email . '.txt');
  $content = str_replace("\n", '</li><li>', $content);
  echo '<ul class="userdata-text">';
  echo '<li>';
  echo $content;
  echo '</li>';
  echo '</ul>';
?>
</body>