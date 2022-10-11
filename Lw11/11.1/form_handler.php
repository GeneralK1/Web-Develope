<?php
function look()
{
   function getParameter(string $first_name): ?string
   {
      $inputJSON = file_get_contents('php://input');
      $input = json_decode($inputJSON, true);
      return $input[$first_name] ?? null;
   }
   
   $first_name = getParameter('first_name');
   $email = getParameter('email');
   $profession = getParameter('profession');
   $checkbox = getParameter('agree');

   $fp = @fopen("./data/$email.txt", 'w+');
   // выводить 500 и mesenge через json
   if ($fp === false)
   {
      echo json_encode(['message' => 'файл не открылся', "status" => 500]);
      return;
   }

   fwrite($fp, 'Email: ');
   fwrite($fp, $email);
   fwrite($fp, "\n");

   fwrite($fp, 'Имя: ');
   fwrite($fp, $first_name);
   fwrite($fp, "\n");

   fwrite($fp, 'Деятельность: ');
   fwrite($fp, $profession);
   fwrite($fp, "\n");

   fwrite($fp, 'Согласие: ');
   fwrite($fp, $checkbox);
   fwrite($fp, "\n");

   fclose($fp);
   // если php отработал без ошибок, то вывод статуса 200
   echo json_encode(["status" => 200]);
}

look();