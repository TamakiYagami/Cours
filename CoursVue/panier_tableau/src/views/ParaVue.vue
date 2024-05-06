<template>
    <div>
        <ul>
            <li>Boutons radio: <br>
                Rouge <input type="radio" v-model="couleur" name="color" value="red"> <br>
                Bleu  <input type="radio" v-model="couleur" name="color" value="blue">
            </li>
            <li>Cases à cocher: <br>
            Voulez-vous afficher le paragraphe ? <input type="checkbox" v-model="show"></li>
        </ul>
        <select v-model="font">
            <option value="serif">serif</option>
            <option value="sans-serif">sans-serif</option>
            <option value="monospace">monospace</option>
            <option value="cursive">cursive</option>
            <option value="fantasy">fantasy</option>
        </select>
        <p v-show="show" :style="{color: couleur, fontFamily: font}" >Paragraphe à afficher</p>
    </div>
</template>

<script>
export default {
    data() {
        return {
            font: 'serif',
            couleur: 'chartreuse',
            show: false
        }
    },
}
</script>