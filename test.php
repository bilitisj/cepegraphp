<?php 
$nom = "Jambon";
$prenom = "Bili";
$age = 52;
$fruit = "pomme";
define('NOMDELACONSTANTE', 'valeur');
echo $prenom . " " . $nom;
echo "$prenom $nom";
echo '$prenom $nom';
echo $age . "ans";
echo "<p> NOMDELACONSTANTE <br>";
echo "Hello ${prenom} ${nom}<br>";
echo "J'ai mis dans mon panier des ${fruit}s et \"j'aime\" ça...";



// les tableaux

$panier = array("bananes", "cerises");//méthode longue
$panier = ["bananes", "cerises"];//méthode courte
$panier[] = "pommes"; // équivalent du push()
$panier[] = "Poires";

echo '<pre>'; //balise pour utiliser la balise print_r
print_r($panier); // affiche les détails de l'array
echo '</pre>';

echo '<pre>'; //balise pour utiliser la balise var_dump
var_dump($panier); // affiche les détails de l'array (encore plus complet)
echo '</pre>';


echo count($panier);


echo '<ul>';
foreach($panier as $key => $fruit) {
    echo "<li data-key=\"$key\">$fruit</li>";
}
echo '</ul>';
?>