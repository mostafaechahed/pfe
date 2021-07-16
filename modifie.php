<?php require_once('connection.php');




if (isset($_GET['mod'])) {
    $id = $_GET['mod'];
    $record = mysqli_query($cnassociation, "SELECT * FROM activite
    WHERE idactivite='$id'");
    $data = mysqli_fetch_assoc($record);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Modifie</title>
    <style>
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
            background-color: green;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        .submit:hover {
            background-color: white;
            color: green;
            border: 1px solid #F30;
        }
    </style>
</head>

<body>
    <div id="container">
        <form action="" name="formulaire" method="POST" class="formulaire" enctype="multipart/form-date">
            <h2 align="center">Mettre a jour un activité...</h2>
            <label for=""><b>id activité:</b></label>
            <input type="text" name="idactivite" class="zonetext" value="<?php echo $data['idactivite'] ?>" required> <br>
            <label for=""><b>nom:</b></label><br>
            <input type="text" name="nom" value="<?php echo $data['nom'] ?>" class="zonetext" required><br>
            <label for=""><b>date:</b></label><br>
            <input type="date" name="date" value="<?php echo $data['date'] ?>" class="zonetext" required><br>
            <label for=""><b>description:</b></label><br>
            <input type="text" name="textarea" value="<?php echo $data['text'] ?>" class="zonetext" required><br>
            <label for=""><b>image:</b></label><br>
            <img width="100px" src="<?php echo $data['image'] ?>" alt="">

            <input type="submit" class="submit" name="btmod" value="Mettre a jour">
            <p><a href="administrateur.PHP" class="submit">Liste d'activités</a></p>
            <label for="" style="text-align:center;color: #960496;">
                <?php
                if (isset($_POST['btmod'])) {
                    $id = $_POST['idactivite'];
                    $nom = $_POST['nom'];
                    $date = $_POST['date'];
                    $modifie = $_GET['mod'];
                    $textarea = mysqli_real_escape_string($cnassociation, $_POST['textarea']);

                    $reqUp = "UPDATE activite SET nom='$nom',date='$date',text='$textarea' WHERE idactivite='$modifie'";
                    $resultat = mysqli_query($cnassociation, $reqUp);
                    if ($resultat) {
                        echo "Mise a jour des données validés";
                    } else {
                        echo "Echec de modification des données";
                    }
                }

                ?>
            </label>
        </form>


    </div>
    <!-- if(isset($_FILES['image'])){
        $image=$_FILES['image']['tmp_name'];
    } -->
</body>

</html>