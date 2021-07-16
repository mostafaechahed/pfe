<?php
require_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>tableau de catégorie</title>
</head>

<body>
    <table width="100%" border="1" style="text-align:center;">
        <tr>
            <th>nom d'abonnées</th>
            <th>telephon</th>
            <th>email</th>
            <th>Catégorie</th>
            <th>date de naissance</th>
            <th>Photo</th>
        </tr>
        <?php
        if (isset($_GET['nomcat'])) {
            $cat = $_GET['nomcat'];
            $reqCat = "SELECT * FROM abonne WHERE categorie='$cat'";
        }
        $resultat = mysqli_query($cnassociation, $reqCat);

        while ($ligne = mysqli_fetch_assoc($resultat)) {


        ?>
            <tr>
                <td><?php echo $ligne['noma']; ?></td>
                <td><?php echo $ligne['telephon']; ?></td>
                <td><?php echo $ligne['email']; ?></td>
                <td><?php echo $ligne['categorie']; ?></td>
                <td><?php echo $ligne['date']; ?></td>

                <td><img width="180px" height="160px" src='<?php echo $ligne['photo']; ?>' class="photopro"></td>
            </tr>
        <?php
        };
        ?>
</body>

</html>