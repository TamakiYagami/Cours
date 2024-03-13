# Cours HTML 

## Introduction HTML
Le language HTML (HyperText Markup Language) est un language balisé il est conçu pour la réalisation des pages internet

Donc il existe beaucoup de balise  pour définir les éléments d'une page web. Les balises sont des mots-clés qui permettent au navigateur d'interpréter le contenu et la page

## les balises
Les balise HTML son défini avec  des accolades `<balise>` et sont composées de :
- Ouverture d'une balise `<balise>`.
- Contenu entre l'ouverture et la fermeture.
- Fermeture de la balise `</balise>`.
Dans le cas juste au dessus on a donner le nom balise à notre balise mais le nom des balises est déjà défini dans l'HTML
par exemple il existe la balise `div`, `head`, `body`
Ces trois balises sont généralement les plus utilisés.

Exemple : 
```html
<div>
    Texte
</div>
```

## Les attributs
Il est possible d'ajouter des informations à une balise en ajoutant des **attributs** qui se place après le nom de la balise, ils sont définis entre les accolades.

Exemple : 
```html
<div id="MaDiv">
    Texte
</div>
```
Ici j'ai rajouter un id qui ce nomme MaDiv à ma balise div

### L'attribut id 
L'attribut id permet de définir command va être appelé notre élément HTML dans notre fichier CSS
Il va être appelé avec `#LeNomDeLID`

### L'attribut class 
Il fait la même chose que l'attribut id mais il va être appelé avec `.LeNomDeLaClass`
On peut ajouter plusieurs classes pour une même balise, séparer par des points.

## Doc type
Tout document HTML doit débuter par le doc type `<!DOCTYPE html>`. Il est utilisé pour dire au navigateur internet comment interpréter le code HTML. Si on ne rajoute pas cette ligne notre page internet va être lancer en mode "quirks"
Le mode "quirks" est la technique utilisée par les navigateurs pour afficher les sites Internet codée antérieurement.
Peux donc poser des soucis si on ne le met pas.

## Balise `html`
Il existe une balise `html`  qui est obligatoire en début de document HTML. Elle sert à définir la version du langage utilisé (HTML5) et contient toutes les autres balises. C'est entre la balise ouvrante et fermante que on va ajouter les autres éléments de notre page.

Exemple : 
```html
<!DOCTYPE html>
<html>
    Texte
    Texte
    Texte
    Autre Element
</html>
```

## Balise `head`
La balise `head` veux dire `tête` on la considère comme l'entête de notre page elle est utilisée pour définir les informations et les métadonnées du document HTML. Tout ce qu'il se trouve dans cette balise ne sera pas afficher dans notre page

Exemple : 
```html
<head>
    <meta charset='utf8'>
    <title>Mon Site Web</title>
<head>
```
- La balise `<head>` est placée juste après la balise `<html>`
- Elle contient des informations sur le document et les méta-données (langage utilisé, titre du site)
- La balise `<meta charset="UTF-8">` permet d'indiquer au navigateur le format d'encodage des caractères utilisés dans le document.

## Balise `body`
La balise body est la balise qui va stocker tout le corps du site comme son nom l'indique tout ce qui va être visible sur la page sera stocker en elle.

Exemple : 
```html
<body>
    Texte
    Texte
    Image
    Vidéo
    Gros Carré
</body>
```

## En résumé les balises à mettre sur votre page HTML 

```html
<!DOCTYPE html>
<html>

<head>
    <!-- Informations sur le document -->
</head>
<body>
    <!-- Contenu de la page -->
</body>

</html>

```
Ce sont les 4 balises principal de notre page

## Les balises souvent utilisé

### Les Balises du `head`
<table>
    <tr>
        <th>Balise</th>
        <th>Utilisation</th>
    </tr>
    <tr>
        <td>link</td>
        <td>Permet d'intégrer un fichier CSS à notre page internet</td>
    </tr>
    <tr>
        <td>meta</td>
        <td>Permet de renseigner des meta donnée (des données cacher concernant le fichier)</td>
    </tr>
    <tr>
        <td>style</td>
        <td>Permet de définir du CSS directement dans la page internet</td>
    </tr>
    <tr>
        <td>title</td>
        <td>Permet de définir le titre du site internet</td>
    </tr>
    <tr>
        <td>script</td>
        <td>Permet d'intégrer du script JavaScript à notre page internet</td>
    </tr>
</table>

### Les Balises du `body`
#### Sectionnement de contenu
<table>
    <tr>
        <th>Balise</th>
        <th>Utilisation</th>
    </tr>
    <tr>
        <td>div</td>
        <td>On le considère comme une boite  qui peut contenir tout ce qu'on veut.</td>
    </tr>
    <tr>
        <td>header</td>
        <td>Contenu introduction de notre page généralement avant le main</td>
    </tr>
    <tr>
        <td>main</td>
        <td>Contient généralement tout les élément primaire</td>
    </tr>
    <tr>
        <td>section</td>
        <td>Comme son nom l'indique c'est une section de la page</td>
    </tr>
    <tr>
        <td>footer</td>
        <td>Défini le bas de page</td>
    </tr>
    <tr>
        <td>article</td>
        <td>Défini une petit partie de la page comme  un article par exemple</td>
    </tr>
    <tr>
        <td>address</td>
        <td>Défini les informations d'une personne</td>
    </tr>
    <tr>
        <td>aside</td>
        <td>Défini le contenu sur un coté de page et qui n'a rien à voir avec le contenue  principal. Par exemple des catégories ou des liens vers d'autres pages</td>
    </tr>
    <tr>
        <td>nav</td>
        <td>représente une section de la page qui contient des liens vers d'autre page du site ou vers d'autres ressources externes</td>
    </tr>
</table>

#### Contenu Textuel
<table>
    <tr>
        <th>Balise</th>
        <th>Utilisation</th>
    </tr>
    <tr>
        <td>h1 à h6</td>
        <td>6 Niveau différents de titre de page 1 plus grand puis 6 plus petit</td>
    </tr>
    <tr>
        <td>ul</td>
        <td>Unorder List Est une liste non ordonner</td>
    </tr>
    <tr>
        <td>ol</td>
        <td>Order List est une liste ordonner</td>
    </tr>
    <tr>
        <td>li</td>
        <td>Représente un élément dans une liste</td>
    </tr>
    <tr>
        <td>p</td>
        <td>Signifie un paragraphe</td>
    </tr>
    <tr>
        <td>a</td>
        <td>Signifie un lien hypertext</td>
    </tr>
    <tr>
        <td>b</td>
        <td>Permet de mettre du texte en gras mais aussi d'aider au référencement</td>
    </tr>
    <tr>
        <td>strong</td>
        <td>Permet de mettre du texte en gras mais aussi de dire qu'il à une grande importance</td>
    </tr>
    <tr>
        <td>br</td>
        <td>Permet de créer  un saut de ligne entre deux éléments</td>
    </tr>
    <tr>
        <td>code</td>
        <td>Permet de définir un petit segment de code dans la page</td>
    </tr>
    <tr>
        <td>i</td>
        <td>Permet de mettre du texte en italique</td>
    </tr>
    <tr>
        <td>span</td>
        <td>Un span est comme un p mais plus petit</td>
    </tr>
</table>

#### Media
<table>
    <tr>
        <th>Balise</th>
        <th>Utilisation</th>
    </tr>
    <tr>
        <td>audio</td>
        <td>Utiliser pour lire un fichier audio</td>
    </tr>
    <tr>
        <td>img</td>
        <td>Permet d'intégrer une image dans la page internet</td>
    </tr>
    <tr>
        <td>video</td>
        <td>Permet d'intégrer une vidéo dans la page internet</td>
    </tr>
</table>

#### Importation

<table>
    <tr>
        <th>Balise</th>
        <th>Utilisation</th>
    </tr>
    <tr>
        <td>iframe</td>
        <td>Permet d'intégrer une page externe dans notre page actuel</td>
    </tr>
</table>

#### Contenu Tabulaire

<table>
    <tr>
        <th>Balise</th>
        <th>Utilisation</th>
    </tr>
    <tr>
        <td>table</td>
        <td>Permet de créer un tableau HTML</td>
    </tr>
    <tr>
        <td>thead</td>
        <td>Permet de grouper les en-têtes des colonnes du tableau</td>
    </tr>
    <tr>
        <td>tbody</td>
        <td>Permet de grouper le contenu principal du tableau (les lignes)</td>
    </tr>
    <tr>
        <td>tfoot</td>
        <td>Permet de grouper les pieds de page du tableau</td>
    </tr>
    <tr>
        <td>caption</td>
        <td>Défini la légende(Le titre) du tableau</td>
    </tr>
    <tr>
        <td>tr</td>
        <td>Permet de  définir une ligne du tableau</td>
    </tr>
    <tr>
        <td>th</td>
        <td>Permet de définir une cellule d'en-tête ou de données</td>
    </tr>
    <tr>
        <td>td</td>
        <td>Permet de définir une cellule du tableau qui contient les donnée</td>
    </tr>
</table>

#### Formulaire

<table>
    <tr>
        <th>Balise</th>
        <th>Utilisation</th>
    </tr>
    <tr>
        <td>form</td>
        <td>Permet de créer la section qui va stocker le formulaire</td>
    </tr>
    <tr>
        <td>input</td>
        <td>Permet de créer les éléments de saisie de donnée. Il y a plusieurs types : text, password, checkbox, radio, file...</td>
    </tr>
    <tr>
        <td>label</td>
        <td>Donne une légende au éléments de saisie de donnée</td>
    </tr>
    <tr>
        <td>fieldset</td>
        <td>Permet de  grouper des champs ensemble et de donner un titre à ce groupe</td>
    </tr>
    <tr>
        <td>legend</td>
        <td>Sert à donner le titre au groupe fieldset</td>
    </tr>
    <tr>
        <td>button</td>
        <td>Permet de créer un bouton cliquable</td>
    </tr>
    <tr>
        <td>textarea</td>
        <td>Permet de créer un grande zone de saisie</td>
    </tr>
</table>
