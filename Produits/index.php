<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
        }
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ccc;
        }
        th {
            background-color: #f2f2f2;
        }
        img {
            width: 60px;
            height: 40px;
        }
        button a {
            text-decoration: none;
            color: white;
        }
        button {
            background-color: #007bff;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<button> <a href="ajout_produit.php">Ajouter un nouveau produit</a> </button>
    
<h1>LISTE DES PRODUITS</h1><br>  

<table>
    <tr>
        <th scope="col">Num produit</th>
        <th scope="col">Nom produit</th>
        <th scope="col">Description</th>
        <th scope="col">Photo produit</th>
        <th scope="col">Modifier</th>
        <th scope="col">Supprimer</th>
        <th scope="col">Voir plus</th>
    </tr>

    <?php
    require ('afficharge.php');

    foreach ($resultat as $value) { ?>
        <tr>
            <td><?php echo $value->id_produit ?></td>
            <td><?php echo $value->nom_produit ?></td>
            <td><?php echo $value->description_produit ?></td>
            <td><img src="images/<?php echo $value->image_produit ?>" alt="Photo"></td>
            <td><button><a href="modifier.php?modif=<?php echo $value->id_produit ?>">Modifier</a></button></td>
            <td><button><a href="supprimer.php?supp=<?php echo $value->id_produit ?>">Supprimer</a></button></td>
            <td><button><a href="detail.php?detail=<?php echo $value->id_produit ?>">Détail</a></button></td>
        </tr>
    <?php
    }
    ?>
</table>
</body>
</html>
