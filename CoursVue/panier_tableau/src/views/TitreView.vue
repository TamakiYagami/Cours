<!-- 
Créez et utilisez un composant simple qui permet d'ajouter <h1>Grand titre</h1> à la page.
Utilisez une propriété valeur du composant pour spécifier le texte à afficher dans le h1. 
L'utiliser au moment de l'appel du composant.
À partir de l'exercice précédent, prévoir un champ de saisie de type texte pour pouvoir 
spécifier le titre à fournir comme propriété du composant. 
-->
<template>
    <div>
        <TitreCpn :titre="Value"/>
        <input type="text" v-model="Value">
    </div>
</template>

<script>
import TitreCpn from '@/components/TitreCpn.vue'
export default {
    name: 'TitreView',
    data() {
        return {
            Value: ''
        }
    },
    components: {
        TitreCpn
    }
}
</script>

<style lang="scss" scoped>

</style>