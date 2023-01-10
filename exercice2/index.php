<?php
// Vérifier si les paramètres "age"
if(isset($_GET['age'])) {
    // Récupérer les valeurs des paramètres
    $age = $_GET['age'];

    echo "Age:" .  $age;
} else {
    echo "Le paramètre age n'existent pas";
}