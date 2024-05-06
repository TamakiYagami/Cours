<template>
    <div>
        <p>Alouette, gentille alouette, alouette, je te plumerai. Je te plumerai  <span v-for="plume in parties" :key="plume">{{ plume }}, </span></p>
        <label for="">Que lui plumer?</label>
        <input type="text" v-model="text">
        <button @click="InputParties()">OK</button>
    </div>
</template>

<script>
    export default {
        name: "AlouettE", 
        data() {
            return {
                text: '',
                parties: []
            }
        },
        methods: {
            InputParties() {
                this.parties.push(this.text)
                this.text = ''
            }
        },
    }
</script>

<style lang="scss">

</style>