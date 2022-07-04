<?php
include 'functions.php';
myPrint_r($_GET);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
        form {
            display: grid;
            width: 20rem;
            gap: .5rem;
        }
        button {
            width:5rem;
        }
    </style>
</head>
<body>
    <h1>Contact</h1>
    <form action="">
        <input type="text" name="nom" placeholder="Votre nom">
        <input type="email" name="email" placeholder="Votre email">
        <textarea name="message" cols="30" rows="10"></textarea>
        <button>Envoyer</button>
    </form>
</body>
</html>