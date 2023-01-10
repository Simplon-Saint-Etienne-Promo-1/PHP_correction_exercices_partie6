<?php
// Vérifier si le paramètre "week" existe
if(isset($_GET['week'])) {
    // Récupérer les valeurs des paramètres
    $week = $_GET['week'];

    echo "Week: " . $week;
} else {
    echo "Le paramètre week n'existe pas";
}