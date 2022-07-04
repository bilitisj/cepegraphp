<?php
    require_once 'functions.php';
    require 'data.php';
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Personnel</title>
            <link rel="stylesheet" href="">
        </head>
        <body>
            <h1>Gérant: <?php echo "${gerant['nom']} ${gerant['prenom']}";?></h1>
            <h2>Le personnel</h2>
            <ul>
                <?php 
                    foreach($personnel as $el) :
                        if($el['service'] !='animation') : 
                            echo "<li>${el['prenom']} ${el['nom']}</li>";
                        endif;
                    endforeach;
                ?>
            </ul>
        </body>
    </html>

