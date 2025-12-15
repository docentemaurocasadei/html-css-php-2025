<!-- //http://localhost:8000/lezione7.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lezione 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <?= "<h1>Lezione 7</h1>" ?>
    <?php 
        echo "<h2>Lezione di PHP</h2>"; 
    ?>
    <div class="container">
        <div class="row">
            <?php
                $card = inserisciCardBootstrap("Var. Intera", "Rappresenta un numero intero, positivo o negativo, senza virgola. Esempio: 123, -456, 0");
                echo $card;
            ?>
        </div>
        <div class="row">
            <?php
                $addizione = 15 + 25;
                $card = inserisciCardBootstrap("Operazioni Aritmetiche", "Esempio di somma: 15 + 25 = $addizione");
                echo $card; 
                $sottrazione = 50 - 20;
                $card = inserisciCardBootstrap("Operazioni Aritmetiche", "Esempio di sottrazione: 50 - 20 = $sottrazione");
                echo $card;
            ?>
        </div>
        <h2>Operatori di Incremento e Decremento</h2>
        <div class="row">
            <?php
                $numero = 10;
                // $numero = $numero + 1; //11
                $numero++; //incremento di 1
                $numero--;
                $numero2 = ++$numero;
                $card = inserisciCardBootstrap("Incremento Classico", "Esempio numero:$numero | numero2:$numero2");
                echo $card;
                $numero3 = 20;
                $numero3 += $numero2; //incremento di 5
                $nominativo ="il cliente è:";
                $nome="Mario"; $cognome="Rossi";
                $nominativo .= " $nome $cognome"; //concatena le stringhe
                $card = inserisciCardBootstrap("Nominativo", "Esempio assegnazione+concatena:$nominativo ");
                echo $card;
            ?>
    </div>
    <h2>Le condizioni (if, else, elseif)</h2>
    <?php
        $annoDiNascita = 2005;
        $annoCorrente = 2025;
        // verificare se maggiorenne
        if ($annoCorrente-$annoDiNascita >= 18) {
            echo inserisciCardBootstrap("Controllo Età", "<p>Sei maggiorenne</p>");
        } else {
            echo inserisciCardBootstrap("Controllo Età", "<p>Sei minorenne</p>");
        }
        $prezzoListino=100;
        $prezzoVendita=80;
        //creare una if che verifica se prezzo scontato e stampa: 
            //- se scontato: "Il prodotto è in offerta ad € *****! (prezzo precedente: € ***** [barrato])"
            //- se non scontato: "Il prodotto è in vendita ad € *****!"
    ?>
    <h2>Il ciclo FOR</h2>
    <?php 
    $listaIscritti=[
        "Mario Rossi", 
        "Luigi Verdi", 
        "Silvia Bianchi", 
        "Anna Neri", 
        "Paolo Gialli"
    ];
    echo "<h3>Elenco Iscritti:</h3>";
    $numeroIscritti = count($listaIscritti);
    for ($i=0; $i < $numeroIscritti; $i++) { 
        echo stampaIscritto($listaIscritti[$i]);
    }
    ?>
    <h2>Il ciclo FOREACH</h2>
    <?php
    echo "<h3>Elenco Iscritti 2:</h3>";
    foreach ($listaIscritti as $iscritto) {
        echo stampaIscritto($iscritto);
    }
    // echo stampaIscritto($listaIscritti[0]);
    // echo stampaIscritto($listaIscritti[1]);
    // echo stampaIscritto($listaIscritti[2]);
    // echo stampaIscritto($listaIscritti[3]);
    // echo stampaIscritto($listaIscritti[4]);
    ?>
</body>
</html>
<?php
function stampaIscritto(string $nomeIscritto): string {
    $card = "<div class='card my-2'>
                <div class='card-body'>
                    <p class='card-text'>$nomeIscritto</p>
                </div>
            </div>";
        return $card;
}
function inserisciCardBootstrap(string $titolo, string $testo) {
    $card = <<<DATA
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{$titolo}</h5>
                <p class="card-text">{$testo}</p>
            </div>
        </div>
DATA;
    return $card;
}

?>