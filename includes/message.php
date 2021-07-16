<div class="row mt-5" id="message">
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