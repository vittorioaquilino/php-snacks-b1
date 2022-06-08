<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        $name = $_GET["name"];
        $email = $_GET["email"];
        $age = $_GET["age"];
        $at_position = strpos($email, "@");
        $point_position = strpos($email, ".");
    ?>

    <?php 
        if(strlen($name) > 3 && $at_position && $point_position && is_numeric($age)) {
    ?>
    <h3>Accesso riuscito</h3>

    <?php } else { ?>

    <h3>Accesso negato</h3>

    <?php } ?>
</body>
</html>