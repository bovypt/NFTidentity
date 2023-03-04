<?php


include("Mysql.php");
$bdd = new Mysql;
$bdd->set_serveur("localhost");
$bdd->set_login("root");
$bdd-> set_mdp("root");
$bdd->set_bdd("nftidentitee");
$bdd->connexion();


?>