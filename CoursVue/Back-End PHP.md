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


