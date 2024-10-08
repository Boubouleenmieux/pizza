<?php

// Configuration de la base de données
$host = 'localhost'; // Adresse du serveur
$dbname = 'pizzeria_stromboli'; // Nom de la base de données
$username = 'root'; // Nom d'utilisateur
$password = ''; // Mot de passe

try {
    // Connexion à la base de données avec PDO
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8"; // DSN
    $pdo = new PDO($dsn, $username, $password);

    // Configuration des attributs PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête SQL pour sélectionner tous les utilisateurs
    $sql = "SELECT * FROM manager";

    // Exécution de la requête avec la méthode query
    $stmt = $pdo->query($sql);

    // Vérification et affichage des résultats
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $user = $row; // Stocker les valeurs de $row dans $user
            break; // Sortir de la boucle après avoir trouvé le premier utilisateur
        }
    } else {
        echo "0 résultats";
        exit; // Sortir du script si aucun utilisateur n'est trouvé
    }
} catch (PDOException $e) {
    die("Erreur de connexion ou de requête : " . $e->getMessage());
}

// Vérifier si le mot de passe et le pseudo correspondent
if (isset($_POST["password"]) && isset($_POST["name"])) {
    if ($_POST["password"] == $user['password'] && $_POST["name"] == $user['name']) {
        // Redirection vers une nouvelle page après connexion réussie
        header('Location: success_admin.php'); // Remplacez par le nom de la page que vous souhaitez afficher
        exit;
    } else {
        // Redirection vers la page précédente après échec de connexion
        header('Location: ' . $_SERVER['HTTP_REFERER']); // Redirection vers la page précédente
        exit;
    }
} else {
    if (!isset($_POST["name"]) || empty($_POST["name"])) {
        echo ("Identifiant vide");
        header('Location: ' . $_SERVER['HTTP_REFERER']); // Redirection vers la page précédente
        exit;
    }
    if (!isset($_POST["password"]) || empty($_POST["password"])) {
        echo ("mot de passe vide");
        header('Location: ' . $_SERVER['HTTP_REFERER']); // Redirection vers la page précédente
        exit;
    }
}


?>