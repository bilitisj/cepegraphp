<?php
/* Nos data (le modèle) */
    $gerant = [
        "nom" => "charlier",
        "prenom" => "Pierre"
    ];

    $personnel = [];
    $personnel[] = [
        "nom" => "Jambon",
        "prenom" => "Bilitis",
        "service" => "stagiaire"
    ];
    $personnel[] = [
        "nom" => "Preite",
        "prenom" => "Anthony",
        "service" => "stagiaire"
    ];
    $personnel[] = [
        "nom" => "Duran",
        "prenom" => "Mevlut",
        "service" => "animation"
    ];

    myPrint_r($personnel);



?>