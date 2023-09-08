<?php
$numero_password = isset($_POST['numero']) ? $_POST['numero'] : "";


// echo ($numero_password);


function randomPassword($numero_password)
{
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array();
    $alphaLength = strlen($alphabet) - 1;
    for ($i = 0; $i < $numero_password; $i++) {
        $numRandom = rand(0, $alphaLength);
        $pass[] = $alphabet[$numRandom];
    }
    return implode($pass);
}

// echo randomPassword($numero_password);
