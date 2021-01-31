<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="./CSS/overall.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <title>Recherche de personnes</title>
</head>

<body>


    <div class="dropdown_search">
        <button>Navigation</button>
        <ul>
            <li><a href="index.php?page=index">Accueil</a></li>
            <li><a href="index.php?page=members&id=<?= $_SESSION['user_info'][0]['id'] ?>">Voir mon profil</a></li>
            <li><a href="index.php?page=index&logout=1">Se deconnecter</a></li>
        </ul>
    </div>
    <script type="text/javascript" src="dropdown.js"></script>
    <div class="container">
        <br />
        <br />
        <br />
        <br />
        <br />
        <h2 style="text-align:center;color:lightyellow">Recherche de membres</h2>
        <br><br>

        <form method="GET">

            <input type="hidden" name="page" value="search">

            <input type="text" name="search" style="width:100%;" placeholder="Rechercher par prénom, ville, ou loisir !" value="<?php if (isset($_GET['search'])) echo $_GET['search']; ?>">
            <br />
            <br />

            <br>
            <br>
            <label for="tranche" style="color: lightyellow;"><b>Filtre par tranche d'âge :</b></label>
            <select name="tranche">
                <option value=""><?php if (isset($_GET['tranche'])) echo $_GET['tranche']; ?></option>
                <option value="18/25 ans">18/25 ans</option>
                <option value="25/35 ans">25/35 ans</option>
                <option value="35/45 ans">35/45 ans</option>
                <option value="45 ans et plus">45 ans et plus</option>
            </select>

            <br>
            <br>
            <input type="submit" name="submit" value="Rechercher">

        </form>

    </div>
    <br />

    <div class="table-responsive">
        <div style="text-align: left;">
            <p style="color: lightyellow;"><b>Résultats correspondants à vos critères :</b></p>
        </div>
        <table class="table table-bordered table striped">



            <tr style="height: 70px;">
                <th style="background-color: purple;color: white;text-align:center;"> Prénom : </th>
                <th style="background-color: purple;color: white;text-align:center;"> Ville : </th>
                <th style="background-color: purple;color: white;text-align:center;"> Age : </th>
                <th style="background-color: purple;color: white;text-align:center;"> Loisir :</th>
            </tr>



            <?php

            if (isset($_GET['search'])){
                
            for ($i = 0; $i < count($res); $i++) {
                echo "<tr>" .
                    '<td style="height:50px;border:2px solid black;font-weight:bolder;text-align:center;">' . $res[$i]['prenom'] . '</td>' .
                    '<td style="height:50px;border:2px solid black;font-weight:bolder;text-align:center;">' . $res[$i]['ville'] . '</td>' .
                    '<td style="height:50px;border:2px solid black;font-weight:bolder;text-align:center;">' . $res[$i]['age'] . '</td>' .
                    '<td style="height:50px;border:2px solid black;font-weight:bolder;text-align:center;">' . $res[$i]['loisir'] . '</td>' .
                    "</tr>";
            }
        }
            ?>



        </table>
    </div>





</body>

</html>