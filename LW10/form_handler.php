<?php
  $email = strtolower($_POST['email']);
  $name = $_POST['first_name'];
  $profession = $_POST['profession'];
  if ($email === '') {
      echo 'ОШИБКА: email не может быть пустым';
      exit;
  }
  
  if ($name === '') {
      echo 'ОШИБКА: Имя не может быть пустым';
      exit;
  }
  
  if (!$profession) {
      echo 'ОШИБКА: Деятельность не указана';
      exit;
  }
  
  $agreement = isset($_POST['checkbox']) ? 'Да' : 'Нет';
  
  $file = 'data/' . $email . '.txt';
  $content = 'Email: ' . $email . PHP_EOL
    . 'Имя: ' . $name . PHP_EOL
    . 'Деятельность: ' . $profession . PHP_EOL
    . 'Согласен получать информационные материалы о старте курса: ' . $agreement . PHP_EOL;
  file_put_contents($file, $content);
  
  echo $name, ', ', 'Вы успешно зарегистрировались на курс';