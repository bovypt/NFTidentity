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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Connexion à la base de données
  $conn = mysqli_connect('hostname', 'database_username', 'database_password', 'NFTidentite');

  // Vérification de la connexion
  if (!$conn) {
    die("La connexion a échoué: " . mysqli_connect_error());
  }

  // Préparation de la requête d'insertion
  $sql = "INSERT INTO users (username, email, password)
  VALUES ('$username', '$email', '$password')";

  // Exécution de la requête
  if (mysqli_query($conn, $sql)) {
    echo "Compte créé avec succès.";
  } else {
    echo "Erreur lors de la création du compte: " . mysqli_error($conn);
  }

  // Fermeture de la connexion
  mysqli_close($conn);
}

?>


</body>
</html>