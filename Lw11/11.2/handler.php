<?php
function getFileSubstring(?string $fileString): ?string
{
   return (trim(substr($fileString, strpos($fileString, ':') + 1)));
}

$files = scandir('./data');
$out = [];

foreach($files as $file)
{
   if (($file === '.') or ($file === '..')) 
   {
      continue;
   }
   $array = file("./data/$file");
   $email = getFileSubstring($array[0]);
   $name = getFileSubstring($array[1]);
   $profession = getFileSubstring($array[2]);
   $activity = getFileSubstring($array[3]);

   $data = [
      "name" => $name,
      "email" => $email,
      "profession" => $profession,
      "activity" => $activity
   ];
   array_push($out, $data);
}

echo json_encode($out);