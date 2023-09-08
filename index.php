<?php
$numero_password = isset($_POST['numero']) ? $_POST['numero'] : "nessun numero inserito";


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

echo randomPassword($numero_password);


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form class="input-group mb-3" method="POST" action="index.php">
        <input type="text" class="form-control" placeholder="Inserisci un numero" aria-describedby="button-addon2" name="numero">
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Invia</button>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>