<?php
require_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>administrateur</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fontawesome.com/v5.15/icons/envelope?style=solid">


</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo" style="width:60px;"></a>
        <p class="navbar-tex" style="margin-left:40px;margin-right:60px">Association des droits d'enfant</p>
        <button class="navbar-toggler btn-info" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="collapsibleNavbar">


            <ul class="nav nav-tabs d-flex justify-content-end">
                <li class="nav-item li text-dark nav-link"><a href="accueil.php">Accueille</a></li>
                <li class="nav-item li text-dark nav-link"><a href="activité.php">activité</a></li>
                <li class="nav-item li text-dark nav-link"><a href="accueil.php">les projets </a></li>
                <li class="nav-item li text-dark nav-link"><a href="abonne.php">Membres abonnés</a></li>
                <li class="nav-item li text-dark nav-link"><a href="contact.php">contact</a></li>
                <li class="nav-item li text-dark nav-link"><a href="deconnecter.php">deconnecter</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>liste des activités</h1>

                <?php
                $reqselect = "SELECT * FROM activite";
                $resultat = mysqli_query($cnassociation, $reqselect);
                $nbr = mysqli_num_rows($resultat);
                echo "<p> Total <b>" . $nbr . "</b> activités...</p>";
                ?>

                <p><a href="ajoute.php"><img src="img/ajoute.png" width="50px" height="50px" alt=""> ajouter un activité</a></p>
                <table class="table table-hover table-responsive table-info" width="100%" border="1">
                    <tr>
                        <th>idactivité</th>
                        <th>nom</th>
                        <th>date </th>
                        <th>discription</th>
                        <th>photo</th>
                        <th>supprimer</th>
                        <th>modifie</th>
                    </tr>
                    <?php
                    while ($ligne = mysqli_fetch_assoc($resultat)) {
                    ?>

                        <tr>
                            <td><?php echo $ligne['idactivite'] ?></td>
                            <td><?php echo $ligne['nom'] ?></td>
                            <td><?php echo $ligne['date'] ?></td>
                            <td><?php echo $ligne['text'] ?></td>
                            <td><img src="<?php echo $ligne['image'] ?>" width="100px" height="60px"></td>
                            <td><a href="supprimer.php?supact=<?php echo $ligne['idactivite'] ?>"><img src="https://img.icons8.com/fluent/48/000000/filled-trash.png" width="50px" height="50px" alt=""></a></td>
                            <td><a href="modifie.php?mod=<?php echo $ligne['idactivite'] ?>"><img src="https://img.icons8.com/nolan/64/edit--v1.png" width="50px" height="50px" alt=""></a></td>

                        </tr>
                    <?php
                    }
                    ?>


                </table>
                <p><a href="activite.php">les activités</a></p>

            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <h5 class="text-center">liste des abonnée </h5>
                <a href="categorie.php" class="text-dark"><b>les catégories</b></a>
                <?php
                $reqselect = "SELECT * FROM abonne";
                $resultat = mysqli_query($cnassociation, $reqselect);
                $nbr = mysqli_num_rows($resultat);
                echo "<p> Total <b>" . $nbr . "</b> des abonnées...</p>";
                ?>
                <p><a href="ajoutea.php"><img src="img/ajoute.png" width="50px" height="50px" alt=""> ajouter un abonnée</a></p>
                <table class="table table-hover table-responsive   table-striped table-info" width="100%" border="1">
                    <tr>
                        <th>idabonne</th>
                        <th>nom d'abonnée</th>
                        <th>telefon </th>
                        <th>email</th>
                        <th>catégorie</th>
                        <th>date</th>
                        <th>photo</th>
                        <th>supprimer</th>
                        <th>modifie</th>
                    </tr>
                    <?php
                    while ($ligne = mysqli_fetch_assoc($resultat)) {
                    ?>

                        <tr>
                            <td><?php echo $ligne['idabonne'] ?></td>
                            <td><?php echo $ligne['noma'] ?></td>
                            <td><?php echo $ligne['telephon'] ?></td>
                            <td><?php echo $ligne['email'] ?></td>
                            <td><?php echo $ligne['categorie'] ?></td>
                            <td><?php echo $ligne['date'] ?></td>
                            <td><img src="<?php echo $ligne['photo'] ?>" width="100px" height="60px"></td>
                            <td><a href="supprimera.php?supab=<?php echo $ligne['idabonne'] ?>"><img src="https://img.icons8.com/fluent/48/000000/filled-trash.png" width="50px" height="50px" alt=""></a></td>
                            <td><a href="modifiea.php?mod=<?php echo $ligne['idabonne'] ?>"><img src="https://img.icons8.com/nolan/64/edit--v1.png" width="50px" height="50px" alt=""></a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
                <p><a href="abonne.php">les mombre</a></p>

            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <h5 class="text-center">liste des messages </h5>

                <?php
                $reqselect = "SELECT * FROM contact";
                $resultat = mysqli_query($cnassociation, $reqselect);
                $nbr = mysqli_num_rows($resultat);
                echo "<p> Total <b>" . $nbr . "</b> des messages...</p>";
                ?>
                <table class="table table-hover table-responsive  table-striped table-light" width="100%" border="1">
                    <tr>

                        <th>nom</th>
                        <th>telephon </th>
                        <th>message</th>
                        <th>supprimer</th>

                    </tr>
                    <?php
                    while ($ligne = mysqli_fetch_assoc($resultat)) {
                    ?>

                        <tr>

                            <td><?php echo $ligne['nom'] ?></td>
                            <td><?php echo $ligne['telephon'] ?></td>
                            <td><?php echo $ligne['message'] ?></td>
                            <td><a href="supprimerm.php?supm=<?php echo $ligne['iduser'] ?>"><img src="https://img.icons8.com/fluent/48/000000/filled-trash.png" width="50px" height="50px" alt=""></a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <h5 class="text-center">liste des annonces </h5>

                <?php
                $reqselect = "SELECT * FROM annonce";
                $resultat = mysqli_query($cnassociation, $reqselect);
                $nbr = mysqli_num_rows($resultat);
                echo "<p> Total <b>" . $nbr . "</b> des annonces...</p>";
                ?>
                <p><a href="ajouteannonce.php"><img src="img/ajoute.png" width="50px" height="50px" alt=""> ajouter un nouvelle annonce</a></p>
                <table class="table table-hover table-responsive   table-striped table-info" width="100%" border="1">
                    <tr>
                        <th>idannonce</th>
                        <th>nom d'annonce</th>
                        <th>date</th>
                        <th>image</th>
                        <th>text</th>
                        <th>supprimer</th>

                    </tr>
                    <?php
                    while ($ligne = mysqli_fetch_assoc($resultat)) {
                    ?>

                        <tr>
                            <td><?php echo $ligne['idannonce'] ?></td>
                            <td><?php echo $ligne['nomannonce'] ?></td>
                            <td><?php echo $ligne['date'] ?></td>
                            <td><img src="<?php echo $ligne['imageA'] ?>" width="100px" height="60px"></td>
                            <td><?php echo $ligne['textA'] ?></td>
                            <td><a href="supprimerannonce.php?supan=<?php echo $ligne['idannonce'] ?>"><img src="https://img.icons8.com/fluent/48/000000/filled-trash.png" width="50px" height="50px" alt=""></a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>


            </div>
        </div>
    </div>
</body>

</html>