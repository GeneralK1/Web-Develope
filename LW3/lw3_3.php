<?php
header("Content-Type: text/plain");
$password = $_GET['password'];
$length = strlen($password);

if (!(ctype_alnum($password)))
{
    echo "It is not a password.";
} 
else 
{
    $strength += 4 * $length;

    for ($i = 0; $i < $length; $i++)
    {
        if (is_numeric($password[$i]))
            $count++;
    }
    $strength += $count * 4;
    $count = 0;

    for ($i = 0; $i < $length; $i++)
    {
        if (ctype_upper($password[$i]))
            $count++;
    }

    if ($count != 0)
        $strength += ($length - $count) * 2;
    $count = 0;

    for ($i = 0; $i < $length; $i++)
    {
        if (ctype_lower($password[$i]))
            $count++;
    }
    if ($count != 0)
        $strength += ($length - $count) * 2;
    $count = 0;

    if (ctype_alpha($password))
        $strength -= $length;
    if (ctype_digit($password))
        $strength -= $length;

    $pairs = count_chars($password);


    foreach ($pairs as $value) 
    {
        if ($val > 1) 
        {
            $strength -= $value;
        }
    }	
    echo 'Password Strength: ' . $strength;
}		
