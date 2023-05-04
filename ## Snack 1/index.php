<!-- Creiamo un array contenente le partite di 
basket di un’ipotetica tappa del calendario.
 Ogni array avrà una squadra di casa e una squadra ospite
 , punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
  Stampiamo a schermo tutte le partite con questo schema.

Olimpia Milano - Cantù | 55-60 -->
<?php
$arrayMach = [
    'Mach1' => [
        'TeamHaouse' => [
            'nameTeam' => 'Squadra 1',
            'pointsTeam' => 10
        ],
        'TeamOspit' => [
            'nameTeam' => 'Squadra 2',
            'pointsTeam' => 5
        ],

        
    ],
    'Mach2' => [
        'TeamHaouse' => [
            'nameTeam' => 'Squadra 3',
            'pointsTeam' => 20
        ],
        'TeamOspit' => [
            'nameTeam' => 'Squadra 5',
            'pointsTeam' => 15
        ]
    ]
];
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

    <?php foreach ($arrayMach as $machs):?>

        <?php foreach ($machs as $teams) : ?>
            <?php foreach ($teams as $key => $value) : ?>
                <p><?= $value ?></p>
            <?php endforeach ?>
        <?php endforeach ?>
    <?php endforeach ?>
</body>

</html>