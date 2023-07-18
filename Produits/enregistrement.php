<?php

 require 'connexion.php';

	$req = $dbconn->prepare("SELECT * FROM produit ORDER BY id_produit DESC");
	$req->execute();
	$resultat = $req->fetchall(PDO::FETCH_OBJ);


 if (isset($_POST['ajout'])) {

 	

  	$nom = $_POST['nom'];
    $description = $_POST['description'];
    $nom_image=$_FILES["image"]["name"];
    $tmpnom= $_FILES["image"]["tmp_name"];
    move_uploaded_file($tmpnom, "images/$nom_image");
    
 
          $req = $dbconn->prepare("INSERT INTO produit (nom_produit,description_produit,image_produit) VALUES('$nom','$description','$nom_image')");
			$req->execute();
			$req->closeCursor();

			header("location: ajout_produit.php");

        

        echo 'Ajout du produit éffectué avec succès ! <br> ';
   }

 

 

?>