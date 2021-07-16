<div class="row mt-5 ">
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