<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include('script.php')?>
    <h2>Snack 1</h2>
    <p>
        Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
        ==> Olimpia Milano - Cantù | 55-60
    </p>
    <h3>Lista con dati presi da php</h3>
    <ul>
        <?php foreach ($giornata_di_campionato as $match) {
            echo "<li>{$match['casa']['squadra']} - {$match['ospiti']['squadra']} | {$match['casa']['punteggio']} - {$match['ospiti']['punteggio']}</li>";
        }; ?>
    </ul>
</body>
</html>