<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        section{
            text-align: center;
            margin-bottom: 10rem;
        }
        ul{
            list-style: none;
            padding: 0;
        }
    </style>
</head>
<body>
    <?php include('script.php')?>
    
    <section>
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
    </section>

    <section>
        <h2>Snack 2</h2>
        <p>Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
        </p>
        <form action="">
            <label for="user-name">Name:</label>
            <input type="text" name="user-name" id="user-name" placeholder="Type your name here...">
            <label for="user-mail">Mail:</label>
            <input type="mail" name="user-mail" id="user-mail" placeholder="Type your mail here...">
            <label for="user-age">Age:</label>
            <input type="number" name="user-age" id="user-age" placeholder="Type your age here...">
            <button>Submit</button>
        </form>
        <?php
            if (isset($_GET['user-name'], $_GET['user-mail'], $_GET['user-age'])){
                if(mb_strlen(trim($_GET['user-name'])) > 3 && (int)$_GET['user-age'] && strpos($_GET['user-mail'], '@') !== false && strpos($_GET['user-mail'], '.') !== false && strpos($_GET['user-mail'], '.') > strpos($_GET['user-mail'], '@')){
                    echo "<h2>Accesso riuscito</h2>";
                } else {
                    echo "<h2>Accesso negato</h2>";
                };
            };
        ?>
    </section>
    <section>
        <h2>Snack 4</h2>
        <p>
            Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
        </p>
        <h3>Array numeri random(refresh per altri numeri)</h3>
        <ul>
        <?php
            foreach($array_numeri_random as $numero){
                echo "<li>$numero</li>";
            }; 
        ?>
        </ul>
    </section>
    <section>
        <h2>Snack 5</h2>
        <p>
            Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
        </p>
        <h2>Lista(ogni frase è un li)</h2>
        <ul>
        <?php
            foreach($frasi as $frase){
                $frase = trim($frase);
                echo "<li>$frase</li>";
            }; 
        ?>
        </ul>
    </section>
</body>
</html>