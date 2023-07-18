<?php 
	
	require 'connexion.php';



	$req = $dbconn->prepare("SELECT * FROM produit ORDER BY id_produit DESC");
	$req->execute();
	$resultat = $req->fetchall(PDO::FETCH_OBJ);
	

?>
