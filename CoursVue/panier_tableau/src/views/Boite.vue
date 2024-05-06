<!--

Dans un modèle de données, ajoutez une propriété titre initialisée à "Cliquez moi!"
Créez dans la vue un bouton, dont le contenu est celui de la propriété titre
Faites en sorte qu'au clic sur le bouton, le contenu de celui-ci soit changé en "Cliqué!"


Ajoutez un champ de saisie de nombre lié à la propriété nombre du modèle, initialisée à 4, ainsi qu'un paragraphe qui affiche ce nombre restitué en temps réel

-->
<template>
    <div>
        <button @click="cliquer()">{{titre}}</button>
        <input type="number" v-model="nombre">
        <p>{{ nombre }}</p>
    </div>
</template>

<script>
export default {
    name: 'ClickMe',
    data() {
        return {
            titre: 'Cliquez moi!',
            nombre: 4
        }
    },
    methods: {
        cliquer() {
            this.titre = this.titre == "Cliqué !" ? "Cliquez moi!" : 'Cliqué !';
        }
    }
}
</script>