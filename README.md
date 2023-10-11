# Guide d'Installation d'un Projet Laravel depuis GitHub

Ce guide simple vous expliquera comment installer un projet Laravel depuis GitHub sur votre propre ordinateur. Suivez ces étapes pour réussir l'installation.

## Étape 1 : Cloner le Projet

1. Ouvrez votre terminal (ligne de commande) sur votre ordinateur.

2. Accédez au répertoire où vous souhaitez télécharger le projet Laravel en utilisant la commande `cd` (change directory). Par exemple :

    ```shell
    cd wamp64/www/Dossier_laravel
    ```

3. Clonez le projet Laravel depuis GitHub en utilisant la commande `git clone` dans le dossier où vous souhaitez le mettre. Par exemple, si vous avez un projet sur GitHub avec un lien comme :

    ```shell
    git clone https://github.com/jennifer-90/Exam_framework_POO.git
    ```

## Étape 2 : Installer les Dépendances

1. Accédez au répertoire du projet que vous venez de cloner en utilisant la commande `cd`. Par exemple :

    ```shell
    cd Dossier_laravel
    ```

2. Installez les dépendances du projet Laravel en utilisant Composer. Exécutez la commande suivante :

    ```shell
    composer install
    ```

## Étape 3 : Copier le Fichier .env

1. Dupliquez le fichier `.env.example` pour créer un fichier `.env`. Utilisez la commande suivante :

    ```shell
    cp .env.example .env
    ```

2. Ouvrez le fichier `.env` nouvellement créé avec un éditeur de texte et configurez les informations de votre base de données, telles que `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, et `DB_PASSWORD`. Assurez-vous que ces informations correspondent à votre configuration de base de données locale.

## Étape 4 : Générer la Clé d'Encryption

1. Exécutez la commande suivante pour générer la clé d'encryption Laravel :

    ```shell
    php artisan key:generate
    ```

2. Cela générera une clé d'encryption aléatoire pour votre application et la stockera dans le fichier `.env`.

## Étape 5 : Configuration de la Base de Données

1. Créez une base de données vide sur votre serveur de base de données (par exemple, MySQL).

2. Dans le fichier `.env`, assurez-vous que les informations de connexion à la base de données sont correctes.

## Étape 6 : Exécutez les Migrations

1. Exécutez les migrations pour créer la structure de la base de données en utilisant la commande suivante :

    ```shell
    php artisan migrate
    ```

## Étape 7 : Accéder au Site Localement

1. Une fois que vous avez terminé d'installer le projet Laravel en suivant les étapes précédentes, vous pouvez maintenant exécuter le site localement sur votre ordinateur.

2. Ouvrez le terminal (ou l'invite de commandes) et assurez-vous que vous êtes toujours dans le dossier de votre projet Laravel (le même où vous avez exécuté les commandes précédentes). Si ce n'est pas le cas, utilisez la commande `cd` pour vous rendre dans ce dossier.

3. Maintenant, exécutez la commande suivante pour démarrer un serveur de développement Laravel :

    ```shell
    php artisan serve
    ```

4. Vous verrez un message indiquant que le serveur de développement est en cours d'exécution, et il devrait vous fournir une URL locale, généralement quelque chose comme `http://127.0.0.1:8000/`.

5. Ouvrez votre navigateur Web (comme Google Chrome, Mozilla Firefox, ou autre) et entrez cette URL locale dans la barre d'adresse. Par exemple, entrez `http://127.0.0.1:8000/`.

6. Vous devriez maintenant voir votre site Laravel s'afficher dans votre navigateur, ce qui signifie que vous accédez au site localement sur votre propre ordinateur.
