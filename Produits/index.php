<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>
</head>
<body>

<button> <a href="ajout_produit.php">Ajouter un nouveau produit</a> </button>
    
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