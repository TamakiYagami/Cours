# Sécurité dans le front-End

- XSS (Cross-Site Scripting) : Attaque qui permet à l'attaquant d'injecter des scripts exécutés côté-client 
Exemple : Pouvoir transmettre le cookie d'authentification de l'utilisateur 
    - Vulnérabilité XSS réfléchie
    http://localhost/monsite/admin.php?test=mec<script>console.log("code malveillant")</script>

    - Vulnérabilité XSS persistante
    Le fait de laisser des commentaires qui peuvent donner des infos

- Obfuscation du code : Rend le code utilisé complètement ilisible (Retire les espace, retire, les saut de ligne, change les nom des variables, ect ...)

- Inclusion de fichiers : Attaque permettant de récupérer un fichier cacher 

# Sécurité dans le back-End

- Hachage du mot de passe (argon2i, sha)

- CSRF : Cross-Site Request Forgery
Des requêtes inter site forger avec un jeton(token) qui permet l'exécution 
Sans ce token toute les requêtes ne sont pas sécurisé 

- Injection SQL : Permet d'executer des requêtes en plus des requêtes habituel 

passwd = SELECT password from users Where username = uname
"SELECT id FROM users WHERE username='" uname "' AND password='" passwd "'"
Dans ce cas la l'utilisateur ce connecte dans tout les cas

- DoS : Denial Of Service (Attaque par déni de service DDOS)
A cause de trop de donnée le site ne peux plus les gérer