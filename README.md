# gpuppy_vinyl
Le gpuppy-vinyl est un site e-commerce de vinyles, ou le client peux consulter les produits en ligne, se connecter et mettre les produits dans son panier.
Il y a également une section sécurisé reservé aux administrateur qui peuvent créer, faire des mises a jour ou éffacer des produits.
C'est une application développé avec Symfony 6.

version en ligne : https://gpuppy-vinyl-ce7c530d2c4f.herokuapp.com

Prérequis
Afin de pouvoir exécuter l'application sur votre poste en local, vous devez d'aborder installer les dépendances suivantes :

*Git
*Php 8.1+
*Symfony 6
*Composer
*Serveur XAMPP ou autre
*Un gestionnaire de base de base de données MySQL, phpMyAdmin pour ma part

Installation

1. Cloner le dépot: git clone https://github.com/Gpuppy/gpuppy_vinyl.git
2. Installer les dépendances avec un: symfony new --full 'my_projet'
3. Configurer l'environnement locale en modifiant le fichier .env et créer un fichier .env.local:
   DATABASE_URL=sql ‘mysql://root@127.0.0.1:3306/my_project’
4. Mise a jour de symfony cli : 'scoop install symfony-cli '
5. Installer webpack: ‘composer require symfony/webpack-encore-bundle’
6. Créer la base de données : ‘php bin/console doctrine:database:create’
7. Lancer la migration pour créer les tableaux en base de données: 'php bin/console make:migration'
8. Lancer l'application en local avec un : 'symfony server:start'
