<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="decoCarte.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Contact - Pizza Stromboli</title>
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
                        <a class="nav-link" href="contact.php">Passer commande</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="contact-page">
    <div class="phone-number-container">
        <p>06.56.86.81.92</p>
    </div>
    <div class="email-container">
        <p>contact@pizzastromboli.alaji.com</p>
    </div>
    <div class="contact-form">
        <h1>Contactez-nous!</h1>
        <form>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name"><br><br>
            <label for="email">Mail :</label>
            <input type="email" id="email" name="email"><br><br>
            <label for="message">Message :</label>
            <textarea id="message" name="message"></textarea><br><br>
            <input type="submit" value="Envoyer">
        </form>
    </div>
</div>
</body>
</html>