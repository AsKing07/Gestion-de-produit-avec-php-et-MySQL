# Gestion de Produit - Projet PHP/HTML/MySQL

Ce dépôt GitHub contient le code source du projet "Gestion de Produit" réalisé avec PHP, HTML et MySQL. Ce projet a pour objectif de fournir une application de gestion de produits avec les opérations CRUD (Create, Read, Update, Delete). L'application utilise une base de données MySQL pour stocker les informations des produits.

Il ne s'agit que d'une mise en place. Des mises à jour doivent etre apportées afin d'améliorer l'interface utilisateur.

## Structure du projet

L'arborescence du projet est la suivante :

```
Produits/
├── afficharge.php
├── ajout_produit.php
├── connexion.php
├── detail.php
├── enregistrement.php
├── formation.sql
├── images/
│   ├── 1044055-000_r63s1.jpg
│   ├── 14 pro max.jpeg
│   ├── 2186794_720x360.jpg
│   ├── 47c6438d12542198.jpg
│   ├── 5b68c.jpg
│   ├── 70677635-logo-joueur-de-football-moderne-passionne-en-action-enregistrer-par-le-gardien-de-but.jpg
│   ├── 830x532_non-frappe.jpg
│   ├── Cadal I 4.jpg
│   ├── gazon-600x450.jpg
│   ├── panier.PNG
│   ├── picture-6397-15100511.jpg
│   ├── retouch333333.jpg
│   ├── sac a dos.jpeg
│   └── SC341_ST.jpg
├── index.php
├── modifier.php
└── supprimer.php
```

## Description du projet

Le projet "Gestion de Produit" est une application Web qui offre les fonctionnalités suivantes :

1. Affichage de la liste des produits : permet de voir la liste des produits avec leurs informations et une photo.

2. Ajout de produit : permet d'ajouter un nouveau produit avec un nom, une description et une photo.

3. Modification de produit : permet de modifier les informations d'un produit existant.

4. Suppression de produit : permet de supprimer un produit de la liste.

## Comment utiliser le projet

1. Clonez ce dépôt sur votre machine locale en utilisant la commande suivante :

```
git clone https://github.com/AsKing07/Produits.git
```

2. Assurez-vous d'avoir un serveur Web local (par exemple, Apache OU WAMP) avec PHP et MySQL installés.

3. Importez la base de données "formation.sql" fournie dans le projet dans votre gestionnaire de base de données (par exemple, phpMyAdmin).

4. Modifiez les informations de connexion à la base de données dans le fichier `connexion.php` pour correspondre à vos paramètres de configuration.

5. Placez les images des produits dans le dossier `images` pour qu'elles soient correctement affichées.

6. Lancez votre serveur Web local et accédez au projet via votre navigateur Web en utilisant l'URL appropriée (par exemple, `http://localhost/Produits`).

7. Vous pouvez désormais utiliser les fonctionnalités de gestion de produits en ajoutant, modifiant ou supprimant des produits depuis l'interface.

## Contribuer

Si vous souhaitez contribuer à ce projet, vous pouvez effectuer une demande de fusion (pull request) en proposant vos modifications. Nous serons heureux d'examiner vos contributions.

## Auteurs

- [Charbel SONON](https://github.com/AsKing07) - Développeur principal

## Licence

Ce projet est sous licence [MIT](LICENSE), ce qui signifie que vous pouvez l'utiliser, le modifier et le distribuer librement. Cependant, veuillez noter que certaines parties du projet peuvent être soumises à d'autres licences.

Nous vous remercions de votre intérêt pour notre projet "Gestion de Produit" et nous espérons que cela vous sera utile. Si vous avez des questions ou des problèmes, n'hésitez pas à les soulever dans la section des problèmes (issues) du dépôt. Bon développement !

