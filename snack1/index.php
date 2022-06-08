<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

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
        $matchs = [
            [
                "home_team" => "Spurs",
                "guest_team" => "Lakers",
                "score_home" => 100,
                "score_guest" => 76
            ],
            [
                "home_team" => "Bulls",
                "guest_team" => "Cleveland",
                "score_home" => 89,
                "score_guest" => 95
            ],
            [
                "home_team" => "Virtus",
                "guest_team" => "Varese",
                "score_home" => 65,
                "score_guest" => 90
            ],
            [
                "home_team" => "Miami",
                "guest_team" => "Indiana",
                "score_home" => 120,
                "score_guest" => 83
            ],
        ]
    ?>

    <ul>
        <?php 
            for($i = 0; $i < count($matchs); $i++) {
                $match = $matchs[$i];
        ?>
        <li>
            <h2>Partita: <?php echo $i+1 ?>
            <?php echo $match["home_team"]; ?> - 
            <?php echo $match["guest_team"]; ?> | 
            <?php echo $match["score_home"]; ?> -
            <?php echo $match["score_guest"]; ?>
            </h2>
        </li>
        <?php } ?>
    </ul>
</body>
</html>