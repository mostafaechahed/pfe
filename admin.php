<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>admine</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fontawesome.com/v5.15/icons/envelope?style=solid">
    <style>
        a {
            text-decoration: none;

        }

        #entete .login {
            opacity: 0.8;
            color: white;
            padding: 14px 20px;
            margin: 8px 0px;
            border: 1px solid #F30;
            border-right: none;
            cursor: pointer;
            right: 0;
            width: 5%;
            position: absolute;
            z-index: 10;

        }

        #entete .login:ahover {
            opacity: 1;
            background-color: #F30;
            border: none;
        }

        /*----ici page login------*/

        #container {
            width: 400px;
            margin: 0 auto;
            margin-top: 10%;

        }

        #container h1 {
            width: 38%;
            margin: auto;
            padding-bottom: 10px;
        }

        .formulair {
            width: 300px;
            padding: 30px;
            border: 1px solid #f1f1f1;
            background: #fff;
            box-shadow: 0 0 20px 0 rgb(0, 0, 0, 0.2), 0 5px 5px 0 rgb(0, 0, 0, 0.25);

        }

        .zonetext {
            background-color: rgb(241, 236, 235);
            color: rgb(29, 27, 27);
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 80%;

        }

        .submit {
            background-color: #F30;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        .submit:hover {
            background-color: white;
            color: #F30;
            border: 1px solid #F30;
        }
    </style>

</head>

<body>
    <div id="container">

        <form action="" method="POST" class="formulair">
            <h1 class="text-center">Connexion</h1>
            <label for=""><b>Nom d'utilisateur</b></label><br>
            <input type="text" placeholder="entrer le nom d'utilisateur" name="txtlogin" required class="zonetext"><br>
            <label for=""><b>Mot de passe:</b></label><br>
            <input type="password" placeholder="entrer le mot de passe" name="txtpw" required class="zonetext"><br>
            <input type="submit" name="btlogin" value="LOGIN" id='submit' class="submit">
            <?php
            if (isset($_POST['btlogin'])) {
                $req = "select * from utilisateur where userName='" . $_POST['txtlogin'] . "'and PassWord='" . $_POST['txtpw'] . "'";
                if ($resultat = mysqli_query($cnassociation, $req)) {
                    $ligne = mysqli_fetch_assoc($resultat);
                    if ($ligne != 0) {
                        session_start();
                        $_SESSION['monlogin'] = $_POST['txtlogin'];
                        header("location:administrateur.php");
                    } else {
                        echo "<font color='#f30'>login ou mot de passe est invalide</font>";
                    }
                }
            }
            ?>
        </form>

    </div>
</body>

</html>