<?php
    $burger = ["nom" => "Burger", "prix" => 10, "quantite" => 10];
    $pbj = ["nom" => "Peanut Butter", "prix" => 5, "quantite" => 150];
    $whiskey = ["nom" => "Whiskey", "prix" => 50, "quantite" => 5610];

    $totalBurger = calculTotal($burger);
    $totalPbj = calculTotal($pbj);
    $totalWhiskey = calculTotal($whiskey);

    echo "Le sous-total pour le " . $burger['nom'] . " est de " . $totalBurger . "€. <br>";
    echo "Le sous-total pour le " . $pbj['nom'] . " est de " . $totalPbj . "€. <br>";
    echo "Le sous-total pour le " . $whiskey['nom'] . " est de " . $totalWhiskey . "€. <br><br>";    

    echo 
    "<table>
    <thead>
        <tr>
            <th>Produit</th>
            <th>Quantité</th>
            <th>Prix unitaire</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>" . $burger['nom'] . "</td>
            <td>" . $burger['quantite'] . "</td>
            <td>" . $burger['prix'] . "</td>
            <td>" . $totalBurger . "</td>
        </tr>
        <tr>
            <th>" . $pbj['nom'] . "</td>
            <td>" . $pbj['quantite'] . "</td>
            <td>" . $pbj['prix'] . "</td>
            <td>" . $totalPbj . "</td>
        </tr>
        <tr>
            <th>" . $whiskey['nom'] . "</td>
            <td>" . $whiskey['quantite'] . "</td>
            <td>" . $whiskey['prix'] . "</td>
            <td>" . $totalWhiskey . "</td>
        </tr>
    </tbody>
    </table>";

    $total = $totalBurger + $totalPbj + $totalWhiskey;
    echo "<br> Le total de la commande est de " . $total . "€.";

    if ($total > 50) {
        $total = $total * 0.9;
        echo "<br>Vous avez droit à une réduction de 10% ! Le nouveau total est de " . $total . "€. <br><br>";
    }
 
    function calculTotal($produit) {
        return $produit["prix"] * $produit["quantite"];
    }

?>