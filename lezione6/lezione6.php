<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //http://localhost:8000/lezione6.php
    /*soluzione 1:
        avviare xampp e mettere il file in C:\xampp\htdocs
        aprire il browser e navigare a:
        http://localhost/lezione6.php
    */ 
    #soluzione 2:
    // avviare il server integrato di php da terminale:
    // php -S localhost:8080
    //poi aprire il browser e navigare a:
    // http://localhost:8080/lezione6.php
    //$env:Path = "c:\xampp\php;" + $env:Path
    echo "<h1>Lezione 6</h1>";
    //variabile
    DEFINE("BR","<br>");
    $miaVar = "Ciao a tutti!";
    echo $miaVar;
    // echo $MIAVAR; //non funziona

    $miaVar = 1890.52;
    echo BR.$miaVar;

    //costante (non può essere modificata)
    DEFINE("PI", 3.14);
    echo BR.PI;
    #PI = 5; //non funziona
    echo BR.($miaVar * PI);

    //standard: costanti in maiuscolo, variabili in minuscolo (camelCase)

    //tipi di dato:
    //booleano
    $veroFalso = true; //vero
    $veroFalso = 1; //vero
    $veroFalso = "ciao"; //vero
    $veroFalso = -10; //vero
    $veroFalso = [1,2]; //vero
    $veroFalso = false; //falso
    $veroFalso = 0; //falso
    $veroFalso = null; //falso
    $veroFalso = ""; //falso
    $veroFalso = []; //falso

    //intero
    $int = 158; //intero
    $quantitaOrdinata = 200; //intero negativo

    //float
    $float = 15.89; //numero con la virgola
    $prezzoProdotto = 5.45; //numero con la virgola 
    $ciao = "mondo";
    //stringa
    $stringa = "Ciao sono una stringa che vale: $ciao "; //stringa
    $nomeUtente = 'Mario Rossi'; //stringa
    $contenuto = "Questo è il contenuto del mio
    articolo che va su più
    l'utente si chiama $nomeUtente
    il prezzo è $prezzoProdotto €
    righe, \"il PHP è potente\" ";
    echo BR.$contenuto;
    //heredoc
    $titolo = <<<DATA
Questo è un testo lungo "da fsad fa"
che può andare su più righe 'daf ds fa'
l'utente si chiama $nomeUtente
il prezzo è $prezzoProdotto €
<h1>Ciao è potente</h1>
DATA;

    $contenuto2 = '
    l\'utente si chiama $nomeUtente
    ';
    echo BR,$titolo;
    print(BR.$titolo);
    echo BR.$contenuto2;
?>
<?php
    echo BR;
    //array
    $frutti = array("mela", "banana", "pera");
    $numeri = [1,2,3,4,5];
    $numeri2 = array(1,2,3,4,5);
    
    //la print_r serve per visualizzare il contenuto di un array
    print_r($frutti);
    echo BR;

    print_r($numeri);
    echo BR;

    echo $frutti[1]; //banana
    echo BR;

    $cliente = array("Luigi", "Verdi", 45);
    $cliente2 = array("Verdi", "Silvia", 45); //ordine diverso
    //array associativo
    $persona = array(
        "nome" => "Mario",
        "cognome" => "Rossi",
        "età" => 30
    );
    $persona2 = array(
        "cognome" => "Rossi",
        "nome" => "Mario",
        "età" => 30
    );
 
    echo $persona["cognome"]; //Rossi
    echo BR;
    echo $cliente[1]; //Verdi
    echo BR;

    $clienti = array(
        array("nome" => "Mario", "cognome" => "Rossi", "età" => 30),
        array("nome" => "Luigi", "cognome" => "Verdi", "età" => 45),
        array("nome" => "Silvia", "cognome" => "Bianchi", "età" => 28)
    );
    print("<h2>Elenco clienti</h2>");
    print_r(BR);
    print_r($clienti);
    
    print_r(BR);
    print("il cognome del 1 elemento è:" . $clienti[0]["cognome"]); //Rossi

    $persona = null; //valore nullo

    echo BR;

    echo 'il risutato della moltiplicazione è: ' . moltiplica(PI, $prezzoProdotto);

    echo BR . "<h2>Esercizio:</h2>";
    //definire 2 variabili di tipo float una per il prezzo di acquisto 
    //e una per il prezzo di vendita

    //modalità più moderna
    stampaPrezzo(prezzoVendita: 15.75, prezzoAcquisto: 10.50); //chiamata con parametri nominativi

    //modalità tradizionale
    stampaPrezzo(10.50, 15.75);

    stampaPrezzo(20.00, 30.00); 
    stampaPrezzo(5.25, 7.00);
    stampaPrezzo(100.00, 150.00);
    
?>
<footer style="min-height: 50em;"></footer>
</body>
</html>
<?php
//commento in php
function stampaPrezzo(float $prezzoAcquisto, float $prezzoVendita): void {
    echo BR . "Prezzo di acquisto: " . $prezzoAcquisto . " €";
    echo BR . "Prezzo di vendita: " . $prezzoVendita . " €";
    /* 
    + addizione 
    - sottrazione 
    * moltiplicazione 
    / divisione 
    % modulo 
    ** potenza
    */
    //calcolare in una variabile il margine di guadagno (prezzo vendita - prezzo acquisto)
    $profitto = $prezzoVendita - $prezzoAcquisto;
    echo BR . "Il margine di guadagno è: " . $profitto . " €";
    //stampare a video la % del margine di guadagno sul prezzo di acquisto (profitto / prezzo acquisto * 100)
    $percentualeProfitto = ($profitto / $prezzoAcquisto) * 100;
    echo BR . "La percentuale di guadagno è: " . $percentualeProfitto . " %";
    print(BR . "--------------------");

    //parametri ricevuti dalla GET
    //localhost:8080/lezione6/lezione6.php?prezzoAcquisto=10.50&prezzoVendita=15.75
/*
    $_GET = [
        "prezzoAcquisto" => 10.50,
        "prezzoVendita" => 15.75
    ]
*/
    $prezzoAcquisto = $_GET["prezzoAcquisto"] ?? 0.0;
    $prezzoVendita = $_GET["prezzoVendita"] ?? 0.0;
}
#function moltiplica($a, $b) {
function moltiplica(float $a, float $b): float {
    return $a * $b;
}

