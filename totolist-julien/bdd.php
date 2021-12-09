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


?>