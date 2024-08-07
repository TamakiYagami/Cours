# SQL
SQL est un language de base de donnée principalement

Méthode CRUD 

INSERT INTO ( Create )

SELECT ( READ )

UPDATE ( UPDATE )

DELETE ( DELETE )

#

## Créer un utilisateur sur Serveur SQL

```sql
CREATE USER 'nom_utilisateur'@'localhost' IDENTIFIED BY 'mot_de_passe';
-- Utiliser des caractères spéciaux comme @, $, %, etc. peut causer des problèmes
```

### Ajouter l'accès à une BDD `GRANT`
```sql
GRANT ALL PRIVILEGES ON nom_BDD.* TO 'nom_utilisateur'@'localhost'; 
-- Donne la permission à toutes les tables et colonnes de la base de donnée "nom_BDD" à l'utilisateur nom_utilisateur
```
On peux aussi donnée l'accès à toute les base de donnée à l'utilisateur
```sql
GRANT ALL PRIVILEGES ON *.* TO 'nom_utilisateur'@'localhost';
-- L'utilisateur nom_utilisateur  aura accès à toutes les bases de données et à tous les droits sur celles-ci.
```
### Mettre à jour le serveur pour qu'il accepte la connexion de cet utilisateur
```sql
FLUSH PRIVILEGES;
```


## Commande SQL

Pour afficher différent chose on peux utiliser SHOW donc en concret
### Afficher les bases de donnée
```sql
SHOW DATABASES;
```

### Afficher les tables qu'il ce trouve dans une base de donnée
```sql
SHOW TABLES;
```

### Afficher les colonnes qu'il ce trouve dans une table
```sql
SHOW COLUMNS FROM NomTable;
```

## Créer une base de donnée si elle n'existe pas
```sql
CREATE DATABASE IF NOT EXISTS "BaseDeDonnee";
```

## Créer une base de donnée même si elle existe
```sql
CREATE DATABASE "BaseDeDonnee"; 
```

Une base de donnée c'est une base qui va stocké des données donc des tables

###### Permet de dire je rentre dans cette base de donnée et j'utilise ce qu'il ce trouve dedans
```sql
USE BaseDeDonnee;
```

#

## Créer une table si elle n'existe pas
```sql
CREATE TABLE IF NOT EXISTS table (
    NomColonne1 type_donnee,
    colonne2 type_donnee,
    colonne3 type_donnee
);
```
## Créer une table même si elle existe
```sql
CREATE TABLE table (
    NomColonne1 type_donnee,
    colonne2 type_donnee,
    colonne3 type_donnee
);
```

### Exemple concret
```sql
CREATE TABLE utilisateur (
    id INT PRIMARY KEY NOT NULL,
    nom VARCHAR(100),
    prenom VARCHAR(255)
);
```


##### PRIMARY KEY 
Défini la colonne en tant que clé primaire
c'est à dire défini la colonne comme un token

##### NOT NULL 
La colonne n'aura jamais de valeur null

### Type Données

INT, BIGINT, TINYINT (entier)

FLOAT, DOUBLE (nombre à virgule)

VARCHAR, TEXT, LONGTEXT, TINYTEXT, ect... (Chaine de caractère)

DATETIME (La date et l'heure)

DATE (La date)

BOOLEAN (true, false)

ENUM (Choix variable défini)


## Modifier une table existante
```sql
ALTER TABLE nomTable
```


## J'ajoute une clé primaire
```sql
ALTER TABLE nomTable
    ADD PRIMARY KEY ('nomColonne')
```
## J'ajoute une colonne
```sql
ALTER TABLE nomTable
    ADD nomColonneChien VARCHAR(100)
```
## Je retire une colonne
```sql
ALTER TABLE nomTable
    DROP nomColonne
```
## Je modifie une colonne
```sql
ALTER TABLE nomTable
    MODIFY nomColoneChien VARCHAR(200)
```
## Je change le nom d'une colonne
```sql
ALTER TABLE nomTable
    CHANGE nomColonneChien nomColonneChat;
```

Alter table permet de modifier une colonne de la table défini dans mon cas juste au dessus je défini la colonne nomColonne comme clé primaire


# Clé Étrangère  
Une clé étrangère c'est quand une colonne d'une table fait reference à une clé primaire d'une autre table
Ils servent à faire en sorte que si on supprime le client de la base de donnée ca supprimera automatiquement toute ces commandes qu'il à effectué
