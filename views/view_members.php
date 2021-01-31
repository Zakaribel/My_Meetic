<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/overall.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</head>

<body>


    <div class="dropdown_members">
        <button>Navigation</button>
        <ul>
            <li><a href="index.php?page=index">Accueil</a></li>
            <li><a href="index.php?page=search">Rechercher des personnes</a></li>
            <li><a href="index.php?page=index&logout=1">Se déconnecter</a></li>
        </ul>
    </div>
    <script type="text/javascript" src="dropdown.js"></script>

    <div class="container">



        <?php if (isset($_SESSION['user_info'])) {
            echo "<h2 style='text-align:center;color:lightyellow;'>Profil de " . $_SESSION['user_info'][0]['email'] . "</h2>";
        } ?>
        <table style="width: 100%;">

            <tr style="height: 70px;">
                <th style="background-color: purple;color: white;text-align:center;"> Nom : </th>
                <th style="background-color: purple;color: white;text-align:center;"> Prénom : </th>
                <th style="background-color: purple;color: white;text-align:center;"> Email :</th>
                <th style="background-color: purple;color: white;text-align:center;"> Année de naissance :</th>
                <th style="background-color: purple;color: white;text-align:center;"> Genre :</th>
                <th style="background-color: purple;color: white;text-align:center;"> Loisir:</th>
            </tr>





            <td style="height:50px;border:2px solid black;">
                <h2 style="text-align:center;"> <?= $_SESSION['user_info'][0]['nom']; ?></h2>
            </td>
            <td style="height:50px;border:2px solid black;">
                <h2 style="text-align:center;"> <?= $_SESSION['user_info'][0]['prenom']; ?> </h2>
            </td>
            <td style="height:50px;border:2px solid black;">
                <h2 style="text-align:center;"> <?= $_SESSION['user_info'][0]['email']; ?></h2>
            </td>
            <td style="height:50px;border:2px solid black;">
                <h2 style="text-align:center;"> <?= $_SESSION['user_info'][0]['date_naissance']; ?> </h2>
            </td>
            <td style="height:50px;border:2px solid black;">
                <h2 style="text-align:center;"> <?= $_SESSION['user_info'][0]['genre']; ?></h2>
            </td>
            <td style="height:50px;border:2px solid black;">
                <h2 style="text-align:center;"><?= $_SESSION['user_info'][0]['loisir']; ?> </h2>
            </td>







    </div>



    <form method="post">

        <label for="genre" style="color:lightyellow;font-weight:bold;">Modification genre :</label>

        <select name="genre">

            <option value=<?= $_SESSION['user_info'][0]['genre']; ?>>- <?= $_SESSION['user_info'][0]['genre']; ?> -</option>
            <option value="Femme">Femme</option>
            <option value="Homme">Homme</option>
            <option value="Autres">Autres</option>
        </select> <br> <br>

        <label for="loisirs" style="color:lightyellow;font-weight:bold;">Modification de votre loisir principal :</label>

        <select name="loisirs"><br><br>
            <option value=<?= $_SESSION['user_info'][0]['loisir']; ?>>- <?= $_SESSION['user_info'][0]['loisir']; ?> -</option>
            <option value="Netflix">Netflix</option>
            <option value="Lire">Lire</option>
            <option value="Jeux videos">Jeux videos</option>
            <option value="Sport">Sport</option>
        </select>
        < </select><br><br>
            <label for="delete" style="color:lightyellow;font-weight:bold;">Voulez-vous définitivement supprimer votre compte ? :</label>

            <select name="delete"><br><br>
                <option value="1">Non</option>
                <option value="0">Oui</option>
            </select><br><br>

            <label for="nom" style="color:lightyellow;font-weight:bold;">Modification du nom :</label>
            <input type="text" name="nom" value=<?= $_SESSION['user_info'][0]['nom']; ?>><br><br>
            <label for="prenom" style="color:lightyellow;font-weight:bold;">Modification du prénom :</label>
            <input type="text" name="prenom" value=<?= $_SESSION['user_info'][0]['prenom']; ?>><br><br>

            <label for="email" style="color:lightyellow;font-weight:bold;">Modification de l'email :</label>
            <input type="text" name="email" value=<?= $_SESSION['user_info'][0]['email']; ?>><br><br>
            <label for="birthday" style="color:lightyellow;font-weight:bold;">Modification de l'année de naissance :</label>
            <input type="date" name="birthday" value=<?= $_SESSION['user_info'][0]['date_naissance']; ?>><br><br>



            <input type='submit' name="submit" class="btn-primary" value="Appliquer" /> <br><br>



    </form>

</body>

</html>