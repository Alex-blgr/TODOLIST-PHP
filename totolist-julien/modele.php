<?php

try

{

       $bdd = new PDO('mysql:host=localhost;dbname=todoliste;charset=utf8', 'root', 'root');

}

catch(Exception $e)

{

       // En cas d'erreur, on affiche un message et on arrête tout

       die('Erreur : '.$e->getMessage());

}

   

// Si tout va bien, on peut continuer


// On récupère tout le contenu de la table rendezvous

$reponse = $bdd->query('SELECT * FROM todo');


// On affiche chaque entrée une à une

while ($donnees = $reponse->fetch())

{
echo $donnees[ 'prenom' ];
echo $donnees[ 'tache' ];
echo ('<a href="supprimer.php?id='.$donnees["id"].'">Cliquer pour supprimer</a>');
?>



<?php
}

       

$reponse->closeCursor(); // Termine le traitement de la requête


?>