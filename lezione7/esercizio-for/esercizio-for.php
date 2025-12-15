<?php
    //stampare una scacchiera 8x8 con i cicli for
    //http://localhost:8080/lezione7/esercizio-for/esercizio-for.php
/*
    1. creare un ciclo for da 1 a 64
    2. ad ogni ciclo stampare un div con un bordo nero di 1px 25x25px
    3. se il numero a cui siamo arrivati % 8 == 0 fare un <br> per andare a capo
    4. creare una classe "sfondo-nero" per colorare lo sfondo di nero in una casella
    5. applicare la classe "sfondo-nero" ogni casella pari della 1 riga e dispari della seconda e così via..
    6. passare in GET un numero, la cella del numero indicato deve essere di colore rosso
    http://localhost/...../esercizio-for.php?numero=15
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
        .carattere-rosso{
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
        $riga = 1;
        for ($i=1; $i<=64; $i++){
            $classe = "";
            if (($i + $riga) % 2 != 0 ){
                $classe = "sfondo-nero";
            }   
            if ($i==$_GET['numero'] ){
                $classe .= " carattere-rosso";
            }
            echo "<div class='$classe'>$i</div>";
            if ($i % 8 == 0){
                echo "<br>";
                $riga++;
            }
        }
    ?>
</body>
</html>