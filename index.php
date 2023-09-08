<?php
include "./functions.php";


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>

<body>
    <div class="text-center">
        <h1>Genera La Tua Password</h1>
        <p>Inserisci la lunghezza della password che desideri generare</p>
    </div>
    <div class="container text-center d-flex flex-column align-items-center">
        <form class="input-group mb-3" method="POST" action="index.php">
            <input type="text" class="form-control" placeholder="Inserisci un numero" aria-describedby="button-addon2" name="numero">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Invia</button>
        </form>
        <h2>Ecco la tua password:</h2>

        <p> <?php echo randomPassword($numero_password) ?></p>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>