<div class="row mt-5 " id="abonne">
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