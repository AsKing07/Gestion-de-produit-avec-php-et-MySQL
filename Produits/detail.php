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
                    <td><img src="images/<?php echo $produit->image_produit; ?>" width="200" height="150" alt="Image du produit"></td>
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
