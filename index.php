<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
 -->
<?php
$campionato = [
    [
        'home' => 'milano',
        'away' => 'cantu',
        'home_points' => 80,
        'away_points' => 74
    ],
    [
        'home' => 'milano',
        'away' => 'brindisi',
        'home_points' => 70,
        'away_points' => 62
    ],
    [
        'home' => 'bologna',
        'away' => 'milano',
        'home_points' => 75,
        'away_points' => 73
    ],
    [
        'home' => 'firenze',
        'away' => 'milano',
        'home_points' => 70,
        'away_points' => 84
    ],
];
foreach ($campionato as $key => $value) {
    echo $value['home'];
    echo $value['away'];
    echo $value['home_points'];
    echo $value['away_points'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 1</title>
</head>

<body>

</body>

</html>