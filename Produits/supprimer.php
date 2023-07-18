<?php 

require 'connexion.php';

if (isset($_GET['supp'])) {

	$id=$_GET['supp'];

	$req=$dbconn->prepare("DELETE FROM produit WHERE id_produit='$id'");
	$req->execute();


	header("location: ajout_produit.php");


}


?> 