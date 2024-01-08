<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>film</title>
</head>
<body>
    <!-- Start header -->
    <header>
        <nav>
            <ul>
                <li><a href="#">Acceuil</a></li>
                <li><a href="#">Films</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <!-- End header -->
    <main>
        <!-- Start first section -->
        <section>

            <article class="container">
                <h1>FILMS</h1>
                <div class="film">
                    <div >
                        <h5>TOM & JERRY</h5>
                        <div class="description">
                            <img src="img/tom&jerry.jpg" alt="affiche tom & jerry">
                            <p>
                                Les nouvelles aventures de Tom & Jerry dans un long métrage mêlant
                                CGI et prises de vues réelles. Tom, le chat et Jerry, la souris
                                n'ont plus de domicile. Ils emménagent dans un hôtel chic de New
                                York où Kayla a trouvé un emploi. Mais pour qu'elle puisse le
                                garder, il faut impérativement qu'elle chasse Jerry avant la
                                réception d'un mariage...
                            </p>
                        </div>
                    </div>

                    <div>
                        <h5>CRUELLA</h5>
                        <div class="description">
                            <img src="img/cruella.jpg" alt="affiche cruella">
                            <p>
                                Londres, années 70, en plein mouvement punk rock. Escroc pleine de
                                talent, Estella est résolue à se faire un nom dans le milieu de la
                                mode. Elle se lie d'amitié avec deux jeunes vauriens qui
                                apprécient ses compétences d'arnaqueuse et mène avec eux une
                                existence criminelle dans les rues de Londres. Un jour, ses
                                créations se font remarquer par la baronne von Hellman, une grande
                                figure de la mode, terriblement chic et horriblement snob. Mais
                                leur relation va déclencher une série de révélations qui amèneront
                                Estella à se laisser envahir par sa part sombre, au point de
                                donner naissance à l'impitoyable Cruella, une brillante jeune
                                femme assoiffée de mode et de vengeance
                            </p>
                        </div>
                    </div>

                    <div>
                        <h5>FREAKY</h5>
                        <div class="description">
                            <img src="img/freaky.jpg" alt="affiche freaky">
                            <p>
                                Millie Kessler, une adolescente de 17 ans, occupée à faire bonne
                                figure dans son très élitiste lycée, Blissfield High, devient la
                                nouvelle cible du Boucher, un tueur en série tristement notoire.
                                Son année de Terminale va alors devenir le cadet de ses soucis.
                                Lorsque, sous l'effet du poignard antique du Boucher ils se
                                réveillent dans le corps de l'autre, Millie n'a alors que 24
                                heures pour retrouver son corps afin de ne pas rester coincée pour
                                le restant de ses jours dans la peau d'un tueur en série d'une
                                cinquantaine d'années. Tâche délicate étant donné qu'elle
                                ressemble désormais à une armoire à glace psychopathe, recherché
                                par la police et cible d'une chasse à l'homme locale alors que le
                                Boucher, lui, dans la peau de la jeune fille, est bien décidé à
                                célébrer un retour en fanfare dans un bain de sang.
                            </p>
                        </div>
                    </div>

                    <div>
                        <h5>WONKA</h5>
                        <div class="description">
                            <img src="img/wonka.png" alt="affiche Wonka">
                            <p>
                                Découvrez la jeunesse de Willy Wonka, l’extraordinaire inventeur, 
                                magicien et chocolatier de l’univers féérique de Charlie et la chocolaterie 
                                de Roald Dahl, dans le film WONKA. Timothée Chalamet incarne ce jeune homme 
                                débordant d’idées et déterminé à changer le monde… avec gourmandise ! Cette 
                                œuvre haute en couleur, mêlant émotion et humour, prouve que, dans la vie, 
                                les rêves peuvent devenir réalité – surtout si on a la chance de rencontrer Willy Wonka.
                            </p>
                        </div>
                    </div>

                    <div>
                        <h5>LES SEGPA AU SKI</h5>
                        <div class="description">
                            <img src="img/segpa.png" alt="affiche les segpa au ski">
                            <p>
                                Les Segpa se retrouvent pour une nouvelle année scolaire riche en aventures, 
                                propulsés directement en Terminale. Deux challenges majeurs les attendent : 
                                la réussite de leur bac et leur participation soudaine aux Olympiades d’hiver inter-lycées.
                            </p>
                        </div>
                    </div>

                    <div>
                        <h5>AQUAMAN ET LE ROYAUME PERDU</h5>
                        <div class="description">
                            <img src="img/aquaman.png" alt="affiche auqaman">
                            <p>
                                James Wan et Jason Momoa, reviennent pour une expérience cinématographique spectaculaire dans 
                                AQUAMAN ET LE ROYAUME PERDU. Black Manta, toujours hanté par le désir de venger son père, est 
                                maintenant plus puissant que jamais avec le légendaire Trident Noir entre ses mains. Pour l’anéantir, 
                                Aquaman doit s’associer à son frère Orm ancien roi d’Atlantide et actuellement emprisonné. Ensemble, 
                                ils devront surmonter leurs différences pour protéger leur royaume et sauver le monde d’une destruction irréversible.
                            </p>
                        </div>
                    </div>
                </div>
            </article>
        </section>
        <!-- END first section -->

        <!-- Start second section -->
        <section class="container contact" id="contact">
            <form action="">
                <h2>CONTACT</h2>
                
        <div class="form-group">
            <div class="groupe">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" placeholder="Votre nom">
            </div>
            <div class="groupe">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Votre adresse email">
            </div>

        </div>
        <textarea name="message" id="" cols="10">Votre massage</textarea>
        <input type="button" value="valider" class="button">

            </form>

        </section>
        <!-- END second section -->
    </main>
    <footer>
        <img src="img/pouce.jpg" alt="pouce">
        <p>&copy;2024</p>
    </footer>

</body>
</html>