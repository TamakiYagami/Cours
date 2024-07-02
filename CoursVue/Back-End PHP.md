# Le Back-End avec PHP 

Il est tout à fait possible de faire du back-end avec PHP
Il suffit de faire un fichier spécifique pour savoir quoi faire en le faisais dans un serveur web

# Les accès CROS

Pour pouvoir utiliser le même origine de l'application web pour faire les requêtes il faut autorisé le multiorigin

avec Access-Control-Allow-Origin il possible d'autorisé tout ou juste les origins spécifique (En acceptant les origins spécifique cela fait plus de sécurité)

# Fonction header

La fonction header de PHP ne permet pas de seulement de changer de page en PHP elle permet aussi de pouvoir faire des modifications sur le serveur sur ce qui accepte ou accepte pas, le temps de connexion, ect..

On avez vu que pour faire la redirection vers une autre page on mettez Location: juste devant la page vers laquelle on voulez aller.
Dans le cas ici on ne met pas Location mais d'autre mot qui permette de faire des modifications

- Access-Control-Allow-Origin : Permet de définir qui peut utiliser l'API
- Access-Control-Allow-Credentials : Permet de dire si on accepte ou non les identifiant de connexion
- Access-Control-Max-Age : Permet de définir combien de temps la connexion reste active

Exemple : 
```php
    if (isset($_SERVER['HTTP_ORIGIN'])) {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 1000');
    }
```

# AXIOS

Axios nous permet de faire des redirections depuis notre application web vers le fichier php souhaité. Pour l'utiliser il faut l'installer dans notre application avec `npm i axios`

Axios permet de faire des requêtes POST, GET, PUT, DELETE

Pour différentes actions : 

- POST : Envoyer des éléments
- GET : Récupérer des éléments
- PUT : Modifier des éléments
- DELETE : Supprimer des éléments

Axios possède donc des fonctions pour chaque type de requêtes

```js
axios.post("http://localhost/post.php", Donnee)
axios.get("http://localhost/get.php", Donnee)
axios.put("http://localhost/put.php", Donnee)
axios.delete("http://localhost/delete.php", Donnee)
```

# Envoie de donnée 

Pour l'envoie de donnée il faut utiliser une variable FormData c'est une variable qui permet de stocker des valeurs mais de façon plus stricte et "automatique"