<?php
header('Content-Type: text/plain');

function CheckIdentifier($text){
   if (($text === null) or ($text === ''))
   {
      echo 'No Identifier cant be empty';
      return;
   }
   if(!ctype_alpha($text[0])){
      echo 'No Identifier cant start with a symbol', $text[0];
      return;
   }
   for($i = 0; $i < strlen($text); $i++){
      if(!ctype_alpha($text[$i]) && !is_numeric($text[$i])){
         echo 'No Symbol ', $text[$i], ' is unavailable symbol in Identifier';
	 return;
      }
   }
   echo 'Yes';
}

echo CheckIdentifier($_GET["identifier"]);