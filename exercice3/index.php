<?php
// Vérifier si les paramètres "startDate" et "endDate" existent
if(isset($_GET['startDate']) && isset($_GET['endDate'])) {
    // Récupérer les valeurs des paramètres
    $startDate = $_GET['startDate'];
    $endDate = $_GET['endDate'];

    echo "Date début: " . $startDate . " Date fin: " . $endDate;
} else {
    echo "Les paramètres startDate et endDate n'existent pas";
}