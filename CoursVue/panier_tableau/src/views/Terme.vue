<template>
    <div>
        <button @click="questionShow = !questionShow; Terme=''; Def=''">Nouveau Termes</button>
        <div v-show="questionShow">
            <label for="terme">Terme :</label>
            <input type="text" v-model="Terme">
            <br>
            <label for="definition">Definition :</label>
            <input type="text" v-model="Def">
            <button @click="questionShow = !questionShow">OK</button>
        </div>
        <TermsCpn v-show="questionShow==false && Terme.length > 0 && Def.length > 0" :terme="Terme" :definition="Def" />
    </div>
</template>

<script>
import TermsCpn from '@/components/TermsCpn.vue';
    export default {
        name: 'TermesView',
        components: {
            TermsCpn,
        },
        data() {
            return {
                questionShow : false,
                Terme : '',
                Def: ''
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>