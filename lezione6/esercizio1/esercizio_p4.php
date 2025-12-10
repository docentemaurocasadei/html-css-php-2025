<?php
// Recupero del parametro GET "aumento"
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
function mostraPrezzoRicalcolato($nome, $prezzo, $aumento) {
    $nuovoPrezzo = $prezzo + ($prezzo * $aumento / 100);
    return number_format($nuovoPrezzo, 2, ",", "");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Listino con aumento</title>

    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 30px auto;
        }
        th, td {
            border: 1px solid #444;
            padding: 10px;
            text-align: center;
        }
        th {
            background: #ddd;
        }
    </style>
</head>
<body>

<h2 style="text-align:center">Listino prezzi con aumento del <?= $aumento ?>%</h2>

<table>
    <tr>
        <th>Prodotto</th>
        <th>Vecchio prezzo</th>
        <th>Nuovo prezzo</th>
    </tr>

    <tr>
        <td><?= $prodotti[0]["nome"] ?></td>
        <td><?= $prodotti[0]["prezzo"] ?> €</td>
        <td><?= mostraPrezzoRicalcolato($prodotti[0]["nome"], $prodotti[0]["prezzo"], $aumento) ?> €</td>
    </tr>

    <tr>
        <td><?= $prodotti[1]["nome"] ?></td>
        <td><?= $prodotti[1]["prezzo"] ?> €</td>
        <td><?= mostraPrezzoRicalcolato($prodotti[1]["nome"], $prodotti[1]["prezzo"], $aumento) ?> €</td>
    </tr>

    <tr>
        <td><?= $prodotti[2]["nome"] ?></td>
        <td><?= $prodotti[2]["prezzo"] ?> €</td>
        <td><?= mostraPrezzoRicalcolato($prodotti[2]["nome"], $prodotti[2]["prezzo"], $aumento) ?> €</td>
    </tr>

    <tr>
        <td><?= $prodotti[3]["nome"] ?></td>
        <td><?= $prodotti[3]["prezzo"] ?> €</td>
        <td><?= mostraPrezzoRicalcolato($prodotti[3]["nome"], $prodotti[3]["prezzo"], $aumento) ?> €</td>
    </tr>

    <tr>
        <td><?= $prodotti[4]["nome"] ?></td>
        <td><?= $prodotti[4]["prezzo"] ?> €</td>
        <td><?= mostraPrezzoRicalcolato($prodotti[4]["nome"], $prodotti[4]["prezzo"], $aumento) ?> €</td>
    </tr>

    <tr>
        <td><?= $prodotti[5]["nome"] ?></td>
        <td><?= $prodotti[5]["prezzo"] ?> €</td>
        <td><?= mostraPrezzoRicalcolato($prodotti[5]["nome"], $prodotti[5]["prezzo"], $aumento) ?> €</td>
    </tr>

</table>

</body>
</html>
