<?php
// Configuration de la connexion à la base de données
$dsn = 'mysql:host=localhost;dbname=pizzeria_stromboli';
$username = 'root';
$password = '';

// Connexion à la base de données avec PDO
try {
  $pdo = new PDO($dsn, $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo 'Erreur de connexion : ' . $e->getMessage();
  exit();
}

// Récupération des catégories de plats
$query = "SELECT * FROM categories";
$stmt = $pdo->prepare($query);
$stmt->execute();

// Début du code HTML
?>




<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="decoCarte.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <title>Pizza Stromboli</title>
</head>
<body>
<header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Pizza Stromboli</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="carte.php">La carte</a>
          <a class="nav-link" href="contact.php">Passer Commande</a>
        </div>
      </div>
    </div>
  </nav>
</header>
<p>MENU</p>

<div class="container">
  <?php
  // Affichage des catégories de plats
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    ?>
    <h2><?php echo $row['nom']; ?></h2>
    <div class="row">
      <?php
      // Récupération des plats de la catégorie actuelle
      $query = "SELECT * FROM plats WHERE categorie_id = " . $row['id'];
      $stmtPlats = $pdo->prepare($query);
      $stmtPlats->execute();

      // Affichage des plats de la catégorie actuelle
      while ($rowPlat = $stmtPlats->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <div class="col-md-6">
          <div class="card mb-12" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text"><?php echo $rowPlat['name']; ?></p>
              <p class="card-text"><?php echo $rowPlat['price']; ?>€</p>
              <button class)"btn-acheter">Acheter</button>
            </div>
          </div>
        </div>
        <?php
      }
      ?>
    </div>
    <?php
  }
  ?>
</div>

</body>
</html>