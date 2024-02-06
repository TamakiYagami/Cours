# Cours Git

## En Ligne de commande 

### La commande `git clone`
La commande `git clone` est une commande utilisée pour cloner un dépôt distant vers votre ordinateur local. Pour cela, vous devez connaître l'adresse du dépôt que vous souhaiter récupérer 
Exemple :
```bash
git clone https://github.com/TamakiYagami/Cours.git
```
Dans mon exemple je récupère mon dépôt GitHub en local sous le nom "Cours". Je peux également spécifier un dossier ou le stocker 
Pour avoir ce lien quand on va sur GitHub on a une bouton `Code` 

<img src="https://cdn.discordapp.com/attachments/550289332812906504/1204421962294628402/image1.png?ex=65d4ac5c&is=65c2375c&hm=01928b2ac5831749a1670a34696ed87a696f152a04666ab6fdba40331c299b72&">

Quand on clique sur ce bouton on a un menu qui apparaît 

<img src="https://cdn.discordapp.com/attachments/550289332812906504/1204422535358324756/image2.png?ex=65d4ace5&is=65c237e5&hm=a69a36dcc832f3cb927d0678d6a496d358b3980fefcf4b2c92a7d4d8076ca627&">

Dans ce menu on peux copier un lien, c'est ce lien qu'il nous faut pouvoir cloner nôtre dépôt 

#### Dossier `.git` 
Quand on clone un dossier de GitHub tout les fichiers son importé sur notre ordinateur et on a aussi un dossier `.git` qui apparaît
Ce dossier .git que on a stocke tout les fichiers et dossier qui 
était sur GitHub puis il stocke aussi les prochains  changements que l'on fait dans notre projet.
Il est donc important de ne pas supprimer le dossier `.git`.
Le dossier `.git` est cacher par défaut.

### La commande `git add`
La commande `git add` permet d'ajouter les nouveau fichier et/ou modifier les anciens fichiers présent dans votre dossier `.git`.
On peux soit faire en sorte d'ajouter un par un les fichiers voulu ou faire en sorte de tous les ajouter.

Pour les ajouter un par un on utilise la commande suivi du nom du fichier :
```bash
git add nom_du_fichier
```

Pour ajouter tous les fichiers on utilise simplement :
```bash
git add .
```

###  La commande `git commit`
La commande `git commit` permet de dire au dossier `.git` qu'il y a une "mise à jour" des fichiers. 
Elle prend comme argument obligatoire un message expliquant cette mise à jour.

Syntaxe :
```bash
git commit -m "Message explicite de la modification"
```
Le `-m` permet de définir le message de "mise à jour" 

Si on fait `-am`  au lieu de `-m`, cela signifie que vous faite une "mise à jour" de tout les fichiers modifiés depuis votre dernière "mise à jour".

Exemple :
```bash
git commit -am  "Ajout d'un fichier"
```
La lettre `a` signifie "all", cela signifie que toutes les modifications sont prises en compte.

### La commande `git push`
La commande `git push` sert à envoyer (push) nos changements vers le serveur distant (GitHub).

Syntaxe :
```bash
git push
```
Cette commande peut être complétée pour spécifier sur quel répertoire du serveur on veut envoyer ces changements.
Cette commande peut être suivie d'un nom de branche, si vous n'en spécifiez pas elle va se lancer sur la branche principal.
Généralement la branche main est la branche principale

### La commande `git pull`
La commande `git pull` est utile pour synchroniser votre travail local avec ce qui se passe sur le dépôt distant. 
C'est à dire récupérer toute les nouvelles mise à jour mise sur le serveur GitHub qui ne sont pas présente sur le travail local.

### La commande `git log`
La commande `git log` affiche l'historique des mises à jour effectuées sur un projet. Elle peut être utile pour comprendre comment et quand ont été réaliser les mises à jour 

Syntaxe : 
```bash
git log
```

### La commande `git diff`
La commande `git diff` compare le contenu du répertoire de travail actuel avec l’index et montre ce qui à était modifier.

Syntaxe : 
```bash
git diff
```

### La commande `git merge`
La commande `git merge` permet de fusionner deux branches ensemble. Elle crée un nouveau commit qui regroupe tous les éléments des deux branches. 

Syntaxe : 
```bash
git merge
```

### Pour effectuer toute les commandes pour inserer dans Github on peux utiliser

```bash
git add . && git commit -am "All" && git push
```