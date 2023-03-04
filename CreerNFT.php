<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    include('connexion.php');
    include('AjoutNft.php');
    $N = new NFTidentitee();
    $N->set_Nom ($_REQUEST['NOM']);
    $N->set_Prenom ($_REQUEST['PRENOM']);
    $N->set_DateDeNaissance ($_REQUEST['DATE_DE_NAISSANCE']);

    if($N->enregistrer($bdd))
    print"Création du NFT ok";
    else 
    print "Erreur";
?>


    <a href="index.html"> Retour au menu </a>
</body>

</html>