<?php
require_once("../Includes/connector.php");
$sql = "SELECT * FROM gerechten";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

    foreach ($result as $result){

        $roundendPrice = sprintf('%0.2f', $result['drankPrijs']);

        echo "<tr>";
        echo    "<td>" . $result['drankNaam'] . "</td>";
        echo    "<td>" . $roundendPrice . "</td>";
        echo    "<td>" . $result['category'] . "</td>";
        echo    "<td class='changeDelButton'><button>Change</button></td>";
        echo    "<td class='changeDelButton'><button class='delete'>Delete</button></td>";
        echo "</tr>";
    }
?>