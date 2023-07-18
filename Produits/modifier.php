<?php 

require 'connexion.php';


if (isset($_GET['modif'])) {

	$id=$_GET['modif'];


	$req = $dbconn->prepare("SELECT * FROM produit WHERE id_produit='$id'");
	$req->execute();
	$resultat = $req->fetchall(PDO::FETCH_OBJ);
	$value=$resultat[0];


}

if (isset($_POST['modifier'])) {

	$nom_image=$_FILES["image"]["name"];
    $tmpnom= $_FILES["image"]["tmp_name"];
    move_uploaded_file($tmpnom, "images/$nom_image");

	$req=$dbconn->prepare("UPDATE `produit` SET `nom_produit`='{$_POST['nom']}',`description_produit`='{$_POST['description']}',`image_produit`='$nom_image' WHERE id_produit='$id'");
	$req->execute();


	header("location: ajout_produit.php");

}







?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>2
<body>
	<h1>MODIFIER LE PRODUIT</h1><br>
    <fieldset>
        <legend>Modifier votre produit</legend><br>
        <form action="" method="POST" enctype= "multipart/form-data">
            <table>
                <tr>
                    <td> <label for="nom">Nom Produit : </label></td>
                    <td><input type="text" name="nom" value="<?php echo $value->nom_produit ?>" required><br></td>
                </tr>
                <tr>
                    <td><label for="prenom">Description : </label></td>
                    <td><input type="text" name="description" value="<?php echo $value->description_produit ?>" required><br></td>
                </tr>
                <tr>
                    <td><label for="date">Image Produit : </label></td>
                    <td><input type="file" name="image" value="<?php echo $value->image_produit ?>" required><br></td>
                </tr>
               
            </table>
            <button type="submit" name="modifier">Modifier</button><br>
        </form>
    </fieldset>
</body>
</html>