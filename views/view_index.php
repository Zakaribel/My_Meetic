<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/overall.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <title>MY MEETIC</title>
</head>

<body>

    <img src="./CSS/logozaki.png" alt="logo">

    <h1>Accueil</h1>
    <?php if (isset($_GET['updateSuccess'])) {
        echo "<p style='color:green;font-weight:bold;text-align:center;'>Votre profil a bien été modifié, vous pouvez vous reconnecter.</p>";
    } ?>
    <?php if (!isset($_SESSION['user_info'])) : ?>
        <div class="dropdown">
            <button>Navigation</button>
            <ul>
                <li><a href="index.php?page=inscription">Inscription</a></li>
                <li><a href="index.php?page=login">Se connecter</a></li>
            </ul>
        </div>
        <script type="text/javascript" src="dropdown.js"></script>
    <?php endif ?>

    <?php if (isset($_SESSION['user_info'])) : ?>
        <h3 style="text-align: center;">

            <?php
            echo "Vous êtes actuellement connecté sous l'adresse suivante : " . "<b>" . $_SESSION['user_info'][0]['email'] . "<b> <br><br>";
            ?>
        </h3>
        <div class="dropdown">
            <button>Navigation</button>
            <ul>
                <li><a href="index.php?page=search">Rechercher des personnes</a></li>
                <li><a href="index.php?page=members&id=<?= $_SESSION['user_info'][0]['id'] ?>">Voir mon profil</a></li>
                <li><a href="index.php?page=index&logout=1">Se deconnecter</a></li>
            </ul>
        </div>
        <script type="text/javascript" src="dropdown.js"></script>
    <?php endif ?>
</body>

</html>