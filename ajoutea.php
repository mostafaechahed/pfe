
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ajouter un abonnée</title>
    <style>
        #container{
width: 400px;margin: 0 auto;margin-top: 10%;

}
        .formulaire{
    width: 300px;
    padding: 30px;
    border: 1px solid #f1f1f1;
    background: #fff;
    box-shadow: 0 0 20px 0 rgb(0,0,0,0.2),0 5px 5px 0 rgb(0,0,0,0.25);

}
#container h1{
    width: 38%;margin: auto;
    padding-bottom: 10px;
}
        .zonetext{ background-color: rgb(241, 236, 235);
    color: rgb(29, 27, 27);
    padding: 14px 20px ;margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 80%;}
    </style>
</head>
<body>
    <div id="container">
        <form name="formAdd" action="" enctype="multipart/form-data" method="POST" class="formulaire" >
    <h2 align="center">Ajouter nouvelle abonnée ...</h2>
    <label for=""><b>idabonnée:</b></label>
    <input type="text" name="id" class="zonetext"placeholder="" required><br>
    <label for=""><b>nom:</b></label>
    <input type="text" name="nom" class="zonetext"placeholder="Entrer le nom" required><br>
    <label for=""><b>telefon:</b></label>
    <input type="text" name="telefon" class="zonetext"placeholder="06........." required><br>
    <label for=""><b>email:</b></label>
    <input type="email" name="email" class="zonetext"placeholder="solicode@gmail.com" required><br>
   <label for=""><b>catégorie:</b></label>
    <input type="text" name="catégorie" class="zonetext"placeholder="Entrer categorie" required><br>
    <label for=""><b>date:</b></label>
    <input type="date" name="date" class="zonetext"placeholder="Entrer le nom" required><br>
    <label for=""><b>image:</b></label>
    <input type="file" name="image" class="zonetext" placeholder="choisie une image" required><br>
    <input type="submit" name="Ajouter" value="Ajouter" id="submit">
<p><a href="administrateur.PHP" class="submit">liste des abonnées</a></p>
<label for="" style="text-align:center;color:#960406">
<?php 

 
 require_once('connection.php');
if(isset($_POST['Ajouter']))
{ 
  
    $id=$_POST['id'];
    $nom=$_POST['nom'];
    $telephon=$_POST['telefon'];
    $email=$_POST['email'];
    $categorie=$_POST['catégorie'];
    $date=$_POST['date'];
    $image=$_FILES['image']['tmp_name'];
    $target="img/".$_FILES['image']['name'];
    move_uploaded_file($image,$target);

    $reqAdd="INSERT INTO `abonne`(`idabonne`, `noma`, `telephon`, `email`, `categorie`, `date`, `photo`) VALUES('$id','$nom','$telephon','$email','$categorie','$date','$target')";
    $resultat= mysqli_query($cnassociation,$reqAdd);

if($resultat)
{
    echo " Insertion des donées validés";
}
else
{
    echo "Echec d Insertion des données";
}
}
?>


</label>

    </form>

    </div>
</body>
</html>