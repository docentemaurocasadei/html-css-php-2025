<?php
// Recupero parametro GET "aumento"
$aumento = $_GET["aumento"] ?? 0;

// Array prodotti
$prodotti = array(
    array("nome" => "Smartphone",  "prezzo" => 300),
    array("nome" => "Tablet",      "prezzo" => 200),
    array("nome" => "Laptop",      "prezzo" => 1000),
    array("nome" => "Smartwatch",  "prezzo" => 150),
    array("nome" => "Desktop",     "prezzo" => 800),
    array("nome" => "Monitor",     "prezzo" => 250)
);

// Funzione calcolo
function nuovoPrezzo($prezzo, $aumento) {
    return number_format($prezzo + ($prezzo * $aumento / 100), 2, ",", "");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Listino con Cards</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container my-4">
    <h2 class="text-center mb-4">Listino prezzi con aumento del <?= $aumento ?>%</h2>

    <div class="row g-4">

        <!-- CARD 1 -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title"><?= $prodotti[0]["nome"] ?></h5>
                    <p class="card-text">
                        Prezzo originale: <?= $prodotti[0]["prezzo"] ?> € <br>
                        Prezzo aggiornato: <?= nuovoPrezzo($prodotti[0]["prezzo"], $aumento) ?> €
                    </p>
                </div>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title"><?= $prodotti[1]["nome"] ?></h5>
                    <p class="card-text">
                        Prezzo originale: <?= $prodotti[1]["prezzo"] ?> € <br>
                        Prezzo aggiornato: <?= nuovoPrezzo($prodotti[1]["prezzo"], $aumento) ?> €
                    </p>
                </div>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title"><?= $prodotti[2]["nome"] ?></h5>
                    <p class="card-text">
                        Prezzo originale: <?= $prodotti[2]["prezzo"] ?> € <br>
                        Prezzo aggiornato: <?= nuovoPrezzo($prodotti[2]["prezzo"], $aumento) ?> €
                    </p>
                </div>
            </div>
        </div>

        <!-- CARD 4 -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title"><?= $prodotti[3]["nome"] ?></h5>
                    <p class="card-text">
                        Prezzo originale: <?= $prodotti[3]["prezzo"] ?> € <br>
                        Prezzo aggiornato: <?= nuovoPrezzo($prodotti[3]["prezzo"], $aumento) ?> €
                    </p>
                </div>
            </div>
        </div>

        <!-- CARD 5 -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title"><?= $prodotti[4]["nome"] ?></h5>
                    <p class="card-text">
                        Prezzo originale: <?= $prodotti[4]["prezzo"] ?> € <br>
                        Prezzo aggiornato: <?= nuovoPrezzo($prodotti[4]["prezzo"], $aumento) ?> €
                    </p>
                </div>
            </div>
        </div>

        <!-- CARD 6 -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title"><?= $prodotti[5]["nome"] ?></h5>
                    <p class="card-text">
                        Prezzo originale: <?= $prodotti[5]["prezzo"] ?> € <br>
                        Prezzo aggiornato: <?= nuovoPrezzo($prodotti[5]["prezzo"], $aumento) ?> €
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>
