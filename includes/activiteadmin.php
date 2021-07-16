<div class="row" id="activite">
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


    </div>
</div>