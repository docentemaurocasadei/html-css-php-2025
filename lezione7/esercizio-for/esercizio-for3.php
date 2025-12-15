<?php
    //stampare una scacchiera 8x8 con i cicli for
    //http://localhost:8080/lezione7/esercizio-for/esercizio-for.php
/*
    1. creare un ciclo for da 1 a 64
    2. ad ogni ciclo stampare un div con un bordo nero di 1px 25x25px
    3. se il numero a cui siamo arrivati % 8 == 0 fare un <br> per andare a capo
    4. creare una classe "sfondo-nero" per colorare lo sfondo di nero in una casella
    5. applicare la classe "sfondo-nero" ogni casella pari della 1 riga e dispari della seconda e così via..
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scacchiera 8x8</title>
    <style>
        div {
            width: 25px;
            height: 25px;
            border: 1px solid black;
            display: inline-block;
            text-align: center;
        }
        .sfondo-nero{
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <?php
        for ($i=1; $i<=64; $i++){
            // Determino la riga corrente: (i-1)/8 dà 0 per i primi 8, 1 per i successivi, ecc.
            // Usiamo il casting (int) per simulare il numero di riga senza funzioni extra
            $riga = (int)(($i - 1) / 8);
            $classe = "";

            // 5. Logica per applicare la classe sfondo-nero:
            // Se la riga è pari ($riga % 2 == 0), coloro le caselle pari ($i % 2 == 0)
            // Se la riga è dispari ($riga % 2 != 0), coloro le caselle dispari ($i % 2 != 0)
            if ($riga % 2 == 0) {
                if ($i % 2 == 0) {
                    $classe = "sfondo-nero";
                }
            } else {
                if ($i % 2 != 0) {
                    $classe = "sfondo-nero";
                }
            }

            // 2. Stampo il div
            echo "<div class='$classe'>$i</div>";

            // 3. Se il numero è multiplo di 8, vado a capo
            if ($i % 8 == 0) {
                echo "<br>";
            }
        }
    ?>
</body>
</html>