<!-- Creare una tabellina di moltiplicazione usando un ciclo for, dove il numero della tabellina viene passato tramite URL con $_GET.
📝 Traccia dell’esercizio
Recuperare un numero dalla URL tramite $_GET['n']
Se il parametro non esiste, usare come valore di default 1
Stampare la tabellina da 1 a 10 del numero scelto
Ogni riga deve essere stampata dentro un <div>
Le righe pari devono avere uno sfondo grigio 

http://localhost:8080/lezione7/esercizio-for2/esercizio-for2.php?n=5

-->
<?php
    // Recupero il numero dalla GET
    // Se non esiste uso 1 come valore di default
    $numero = isset($_GET['n']) ? $_GET['n'] : 1;
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Tabellina</title>
    <style>
        .riga {
            padding: 5px;
            border: 1px solid #000;
            width: 200px;
        }
        .pari {
            background-color: #ddd;
        }
    </style>
</head>
<body>

<h2>Tabellina del <?php echo $numero; ?></h2>

<?php
    for ($i = 1; $i <= 10; $i++) {

        $classe = "";

        // Se il numero è pari assegno la classe
        if ($i % 2 == 0) {
            $classe = "pari";
        }

        echo "<div class='riga $classe'>";
        echo "$numero x $i = " . ($numero * $i);
        echo "</div>";
    }
?>

</body>
</html>
