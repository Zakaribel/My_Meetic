<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/overall.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <title>Connexion</title>
</head>

<body>
<div class="dropdown_inscription">
        <button>Navigation</button>
        <ul>
            <li><a href="index.php?page=login">Se connecter</a></li>
            <li><a href="index.php?page=index">Retour à l'accueil</a></li>
        </ul>
    </div>
    <script type="text/javascript" src="dropdown.js"></script>
    <h1>Connexion</h1> <br><br> <br> <br><br><br><br><br><br><br>
    <form method="POST">
       
        <hr>
        <div class="container">
        <p>Veuillez remplire les champs ci-dessous</p>
           <label>Adresse e-mail : </label>
            <input type="text" placeholder="Entrez votre adresse email" name="email" required>
            <label>Mot de passe : </label>
            <input type="password" placeholder="Entrez votre mot de passe" name="password" required><br><br>
            <button type="submit" name="submit">Se connecter</button>
        </div>
        
    </form>


</body>

</html>