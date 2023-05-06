<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande</title>
</head>
<body>
    <form action="commandeRestaurant.php" method="post">
        <label>Quantité :</label> <br>
        <input type="text" name="quantity">
        <input type="submit" value="Total">
    </form>
</body>
</html>

<?php
    $item = "pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = null;
    $total = $quantity * $price;

    echo "Tu as commandé {$quantity} x {$item}(s) <br>";
    echo "Le total est: {$total}€";
?> 