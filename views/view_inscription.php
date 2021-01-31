<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/overall.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <title>Inscritption</title>
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


    <form method="POST" style="border:1px solid #ccc">
        <div class="container">
            <h1>S'inscrire</h1>
            <p>Veuillez remplire les champs ci-dessous</p>
            <hr>
            <label for="nom"><b>Nom</b></label>
            <input type="text" placeholder="Entrez votre nom" name="nom"  ed><br><br>

            <label for=prenom"><b>Prénom</b></label>
            <input type="text" placeholder="Entrez votre prénom" name="prenom" required><br><br>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Entrez votre adresse email" name="email" required><br><br>

            <label for="password"><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrez votre mot de passe" name="password" required><br><br>

            <label for="birthday"><b>Date de naissance :</b></label>
            <input type="date" name="birthday" required><br><br>

            <label for="ville"><b>Ville :</b></label>
            <input type="ville" name="ville" required><br><br>

            <label for="genre">Votre genre :</label>
            <select name="genre"><br><br>
                <option value="femme">Femme</option>
                <option value="homme">Homme</option>
                <option value="autres">Autres</option>
            </select><br><br>

            <label for="loisirs">Choisissez votre loisir principal :</label>
            <select name="loisirs"><br><br>
                <option value="Netflix">Netflix</option>
                <option value="Lire">Lire</option>
                <option value="Jeux videos">Jeux videos</option>
                <option value="Sport">Sport</option>
            </select><br><br>

            <button type="submit" name="submit">S'inscrire</button>
        </div>
    </form>



</body>

</html>