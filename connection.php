<?php
function maConnexion(){
try
{
$bdd = new PDO ('mysql:host=localhost; dbname=mabase','root','');
$bdd->query("SET NAMES 'utf8'");
return $bdd;

echo"hamis";
}
catch (PDOException $e)
{
die ('Erreur : ' . $e->getMessage());
}
}
?>

