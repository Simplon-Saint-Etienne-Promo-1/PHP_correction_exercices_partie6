<?php
// Vérifier si les paramètre building et room existent
if(isset($_GET['building']) && isset($_GET['room'])) {
    // Récupérer les valeurs des paramètres
    $building = $_GET['building'];
    $room = $_GET['room'];

    echo "Building: " . $building . " Room: " . $room;
} else {
    echo "Les paramètres Building et Room n'existent pas";
}