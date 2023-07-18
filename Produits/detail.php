<?php
require 'connexion.php';

if (isset($_GET['detail'])) {
    $id = $_GET['detail'];

    // Récupérer les informations du produit depuis la base de données
    $req = $dbconn->prepare("SELECT * FROM produit WHERE id_produit = :id");
    $req->bindParam(':id', $id, PDO::PARAM_INT);
    $req->execute();
    $produit = $req->fetch(PDO::FETCH_OBJ);

    if (!$produit) {
        // Si le produit n'existe pas, afficher un message d'erreur
        echo "<h1>Produit introuvable</h1>";
    } else {
        // Afficher les détails du produit
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <title>Détails du produit</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                }
                h1 {
                    text-align: center;
                    margin-top: 20px;
                }
                table {
                    width: 50%;
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
                    width: 200px;
                    height: 150px;
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
            <h1>DÉTAILS DU PRODUIT</h1><br>
            <table>
                <tr>
                    <td><strong>Nom du produit :</strong></td>
                    <td><?php echo $produit->nom_produit; ?></td>
                </tr>
                <tr>
                    <td><strong>Description :</strong></td>
                    <td><?php echo $produit->description_produit; ?></td>
                </tr>
                <tr>
                    <td><strong>Image :</strong></td>
                    <td><img src="images/<?php echo $produit->image_produit; ?>" alt="Photo"></td>
                </tr>
            </table>
            <br>
            <button><a href="index.php">Retour à la liste des produits</a></button>
        </body>
        </html>
    <?php
    }
} else {
    // Si l'id du produit n'est pas spécifié, afficher un message d'erreur
    echo "<h1>Produit non spécifié</h1>";
}
?>
