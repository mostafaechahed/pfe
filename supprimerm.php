<?php require_once('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div id="container">
        <form action="" name="formdelet" method="post" class="formulaire">
            <p><a href="administrateur.PHP" class="submit">liste des messages</a></p>
        </form>



        <?php
        if (isset($_GET['supm'])) {
            $sup = $_GET['supm'];
            $reqDelete = "DELETE FROM contact WHERE  iduser='$sup'";
            $resultat = mysqli_query($cnassociation, $reqDelete);
        }
        if ($resultat) {
            echo "<label style='text-align:center;color: green;'> La supprission a été correctement efféctuée....</label>";
        } else {
            echo "<label style='text-align:center;color: #960496;'> la suppression a échouée...";
        }
        ?>
    </div>
</body>

</html>