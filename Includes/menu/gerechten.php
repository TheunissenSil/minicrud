<?php
require_once("../Includes/connector.php");

$sql = "SELECT * FROM gerechten WHERE category = :category";
$stmt = $connect->prepare($sql);
$stmt->bindParam(':category', $category);
$stmt->execute();
$result = $stmt->fetchAll();

foreach ($result as $result){

    $roundendPrice = sprintf('%0.2f', $result['gerechtPrijs']);

    echo"<div class='gerecht'>";
    echo    "<div>";
    echo        "<h3>" . $result['gerechtNaam'] . "</h3>";
    echo        "<p>" . $result['gerechtBeschrijving'] . "</p>";
    echo    "</div>";
    echo    "<div class='priceCart'>";
    echo        "<h3 class='priceTag'>€" . $roundendPrice . "</h3>";
    echo        "<form action='../Pages/shoppingCart.php?id=" . $result['id'] . "&naam=" . $result['gerechtNaam'] . "&prijs=" . $roundendPrice . "&category=" . $result['category'] . "' method='post'>";   
    echo            "<button type='submit' name='add_to_cart' class='addToCart'>";
    echo                "<i class='fa fa-plus'></i><i class='fa fa-cart-plus'></i>";
    echo            "</button>";
    echo        "</form>";
    echo    "</div>";
    echo"</div>";
}