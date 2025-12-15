<?php
        //creare una if che verifica se prezzo scontato e stampa: 
            //- se scontato: "Il prodotto è in offerta ad € *****! (prezzo precedente: € ***** [barrato])"
            //- se non scontato: "Il prodotto è in vendita ad € *****!"
        //http://localhost:8080/lezione7/esercizio-if/esercizio-if.php
        $prezzoListino=100;
        $prezzoVendita=180;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio if</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
        if ($prezzoVendita < $prezzoListino) {
            echo inserisciCardBootstrap("Prezzo Scontato", "<p>Il prodotto è in offerta ad € $prezzoVendita! (prezzo precedente: <strike>€ $prezzoListino</strike>)</p>");
        } elseif($prezzoVendita == $prezzoListino) {
            echo inserisciCardBootstrap("Prezzo Non Scontato", "<p>Il prodotto è in vendita ad € $prezzoVendita!</p>");
        } else {
            echo inserisciCardBootstrap("Errore Prezzo", "<p>Errore nei prezzi inseriti!</p>");
        } 
    ?>     
</body>
</html>
<?php
    function inserisciCardBootstrap($titolo, $contenuto) {
        return "
        <div class='col-md-6 my-3'>
            <div class='card shadow-sm'>
                <div class='card-body'>
                    <h5 class='card-title'>$titolo</h5>
                    <p class='card-text'>$contenuto</p>
                </div>
            </div>  
        </div>
        ";
    }   