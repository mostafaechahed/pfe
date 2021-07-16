<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ajouter</title>
    <style>
        #container {
            width: 400px;
            margin: 0 auto;
            margin-top: 10%;

        }

        .formulaire {
            width: 300px;
            padding: 30px;
            border: 1px solid #f1f1f1;
            background: #fff;
            box-shadow: 0 0 20px 0 rgb(0, 0, 0, 0.2), 0 5px 5px 0 rgb(0, 0, 0, 0.25);

        }

        #container h1 {
            width: 38%;
            margin: auto;
            padding-bottom: 10px;
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
    </style>
</head>

<body>
    <div id="container">
        <form name="formAdd" action="" enctype="multipart/form-data" method="POST" class="formulaire">
            <h2 align="center">Ajouter nouvelle activité...</h2>
            <label for=""><b>idactivité:</b></label>
            <input type="text" name="id" class="zonetext" placeholder="" required><br>
            <label for=""><b>nom:</b></label>
            <input type="text" name="nom" class="zonetext" placeholder="Entrer le nom" required><br>
            <label for=""><b>date:</b></label>
            <input type="date" name="date" class="zonetext" placeholder="" required><br>
            <label for=""><b>discription:</b></label>
            <textarea type="textarea" name="discription" class="zonetext" placeholder="" rows="10" cols="500" required></textarea><br>
            <label for=""><b>image:</b></label>
            <input type="file" name="image" class="zonetext" placeholder="choisie une image" required><br>
            <input type="submit" name="Ajouter" value="Ajouter" id="submit">
            <p><a href="administrateur.PHP" class="submit">liste d'activités</a></p>
            <label for="" style="text-align:center;color:#960406">
                <?php


                include('connection.php');
                if (isset($_POST['Ajouter'])) {

                    $id = $_POST['id'];
                    $nom = $_POST['nom'];
                    $date = $_POST['date'];
                    $textarea = mysqli_real_escape_string($cnassociation, $_POST['discription']);
                    $image = $_FILES['image']['tmp_name'];
                    $target = "img/" . $_FILES['image']['name'];
                    move_uploaded_file($image, $target);

                    $reqAdd = "INSERT INTO activite(`idactivite`, `nom`, `date`, `image`, `text`) VALUES('$id','$nom','$date','$target','$textarea')";
                    $resultat = mysqli_query($cnassociation, $reqAdd);

                    if ($resultat) {
                        echo " Insertion des donées validés";
                    } else {
                        echo "Echec d Insertion des données";
                    }
                }
                ?>


            </label>

        </form>

    </div>
</body>

</html>