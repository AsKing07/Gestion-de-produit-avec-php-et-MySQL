<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Ajout de produit</title>
</head>
<body>
	 <h1>BIENVENUE SUR LA PAGE D'AJOUT DE PRODUIT</h1><br>
    <fieldset>
        <legend>Ajouter votre produit</legend><br>
        <form action="enregistrement.php" method="POST" enctype= "multipart/form-data">
            <table>
                <tr>
                    <td> <label for="nom">Nom Produit : </label></td>
                    <td><input type="text" name="nom" required><br></td>
                </tr>
                <tr>
                    <td><label for="prenom">Description : </label></td>
                    <td><input type="text" name="description" required><br></td>
                </tr>
                <tr>
                    <td><label for="date">Image Produit : </label></td>
                    <td><input type="file" name="image" required><br></td>
                </tr>
               
            </table>
            <button type="submit" name="ajout">Ajouter</button><br>
        </form>
    </fieldset>
    <br>

    <h1>LISTE DES PRODUITS</h1><br>  

    <table width="45%" border="" cellspacing="2" cellpadding="2">
        <tr>
        	<th scope="col">Num produit</th>
            <th scope="col">Nom produit</th>
            <th scope="col">Description</th>
            <th scope="col">Photo produit</th>
            <th scope="col">Modifier</th>
            <th scope="col">Suprimer</th>
            <th scope="col">Voir plus</th>
        </tr>


        <?php
    
        require ('afficharge.php');

        foreach ($resultat as $value) { ?>
            <tr>
                <td><?php echo $value->id_produit ?></td>
                <td><?php echo $value->nom_produit ?></td>
                <td><?php echo $value->description_produit ?></td>
                <td><img src="images/<?php echo $value->image_produit ?>" width="45px" height="20px" ></td>
                <td><button><a href="modifier.php?modif=<?php echo $value->id_produit ?>">Modifier</a></button></td>
                <td><button><a href="supprimer.php?supp=<?php echo $value->id_produit ?>">Supprimer</a></button></td>
                <td><button><a href="detail.php?detail=<?php echo $value->id_produit ?>">Detail</a></button></td>
                
            </tr>
        <?php
        }

        ?>
    </table>
</body>
</html>
