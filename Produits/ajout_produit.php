<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ajout de produit</title>
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
    </style>
</head>
<body>
    <h1>BIENVENUE SUR LA PAGE D'AJOUT DE PRODUIT</h1><br>
    <fieldset>
        <legend>Ajouter votre produit</legend><br>
        <form action="enregistrement.php" method="POST" enctype= "multipart/form-data">
            <label for="nom">Nom Produit :</label>
            <input type="text" name="nom" required>
            <label for="description">Description :</label>
            <input type="text" name="description" required>
            <label for="image">Image Produit :</label>
            <input type="file" name="image" required>
            <input type="submit" name="ajout" value="Ajouter">
        </form>
    </fieldset>
    
</body>
</html>
