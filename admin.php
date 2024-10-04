<?php
$dsn = 'mysql:host=localhost;dbname=pizzeria_stromboli';
$username = 'root';
$password = '';


if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM utilisateurs WHERE email = '$email' AND password = '$password'";
    $resultat = $connexion->query($sql);

    if ($resultat->rowCount() > 0) {
        // L'utilisateur est connecté, affichez la page d'administration
        header('Location: formulaire_admin.php');
    } else {
        // L'utilisateur n'est pas connecté, affichez un message d'erreur
        echo 'Erreur de connexion';
    }
}
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
<form action="formulaire_admin.php" method="post">
    <label for="email">Nom d'utilisateur :</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Se connecter">
</form>








    
</body>
</html>