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
  <div class="row">
    <div class="col-md-6">
      <div class="card mb-12" style="width: 18rem;">
        <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">chèvre-miel</p>
          <p class="card-text">18€</p>
        </div>
      </div>
      <div class="card mb-12" style="width: 18rem;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSa2qRMTC5NvqcQavJjyK2FqgevKQcGKGV8RQ&s" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Margarita</p>
          <p class="card-text">14.50€</p>
        </div>
      </div>
      <div class="card mb-12" style="width: 18rem;">
        <img src="https://aundetailpres.fr/wp-content/uploads/2023/12/DALL%C2%B7E-2024-01-03-17.23.37-A-whole-Tandoori-pizza-presented-on-a-wooden-pizza-board-showcasing-an-exotic-and-colorful-style.-The-dough-is-golden-and-crispy-with-slightly-puffe-600x600.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Tandoori</p>
          <p class="card-text">18€</p>
        </div>
      </div>
      <div class="card mb-12" style="width: 18rem;">
        <img src="https://pizzavibes.fr/wp-content/uploads/2024/02/pizza-raclette-recette-500x342.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Raclette</p>
          <p class="card-text">18€</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card mb-12" style="width: 18rem;">
        <img src="https://lelocalapizzas.fr/wp-content/uploads/2023/04/pizza-saumon-creme-fraiche-recette.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">L'Océa-nique</p>
          <p class="card-text">18€</p>
        </div>
      </div>
      <div class="card mb-12" style="width: 18rem;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnupPxNgOtc5CUQ5M-aoYdhxff2pDQDEbN5w&s" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Diavola</p>
          <p class="card-text">18€</p>
        </div>
      </div>
      <div class="card mb-12" style="width: 18rem;">
        <img src="https://www.galbani.fr/wp-content/uploads/2020/03/Image1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">4 saisons</p>
          <p class="card-text">18€</p>
        </div>
      </div>
      <div class="card mb-12" style="width: 18rem;">
        <img src="https://dxpulwm6xta2f.cloudfront.net/eyJidWNrZXQiOiJhZGMtZGV2LWltYWdlcy1yZWNpcGVzIiwia2V5IjoicGl6emFfcGVwcGVyb25pLmpwZyIsImVkaXRzIjp7ImpwZWciOnsicXVhbGl0eSI6ODB9LCJwbmciOnsicXVhbGl0eSI6ODB9LCJ3ZWJwIjp7InF1YWxpdHkiOjgwfX19" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Peperoni</p>
          <p class="card-text">18€</p>
        </div>
      </div>
    </div>
  </div>
  <h2>CARTE DES DESSERTS</h2>
  <h3>BOISSONS</h3>
</div>

</body>
</html>