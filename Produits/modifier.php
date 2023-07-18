<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Modifier le produit</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
        }
        fieldset {
            width: 50%;
            margin: 20px auto;
            border: 1px solid #ccc;
            padding: 10px;
        }
        legend {
            font-weight: bold;
        }
        label, input {
            display: block;
            margin-bottom: 10px;
        }
        input[type="file"] {
            margin-bottom: 20px;
        }
        img {
            width: 200px;
            height: 150px;
        }
        input[type="submit"] {
            background-color: #007bff;
            border: none;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
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
    <h1>MODIFIER LE PRODUIT</h1><br>
    <?php
    require 'connexion.php';

    if (isset($_GET['modif'])) {
        $id = $_GET['modif'];

        $req = $dbconn->prepare("SELECT * FROM produit WHERE id_produit='$id'");
        $req->execute();
        $resultat = $req->fetchall(PDO::FETCH_OBJ);
        $value = $resultat[0];

        if (!$value) {
            // Si le produit n'existe pas, afficher un message d'erreur
            echo "<h2>Produit introuvable</h2>";
        } else {
            ?>
            <fieldset>
                <legend>Modifier votre produit</legend><br>
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="nom">Nom Produit :</label>
                    <input type="text" name="nom" value="<?php echo $value->nom_produit ?>" required>
                    <label for="description">Description :</label>
                    <input type="text" name="description" value="<?php echo $value->description_produit ?>" required>
                    <label for="image">Image Produit :</label>
                    <img src="images/<?php echo $value->image_produit ?>" alt="Photo">
                    <input type="file" name="image" required>
                    <input type="submit" name="modifier" value="Modifier">
                </form>
            </fieldset>
            <br>
            <button><a href="ajout_produit.php">Retour à la liste des produits</a></button>
            <?php
        }
    } else {
        // Si l'id du produit n'est pas spécifié, afficher un message d'erreur
        echo "<h2>Produit non spécifié</h2>";
    }
    ?>
</body>
</html>
