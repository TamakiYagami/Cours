<template>
    <div>
        <label for="">Code :</label>
        <input type="number" min="0" max="7" maxlength="1" @input="PermissionChange()" v-model="code">
        <br>
        <label for="">Read</label>
        <input type="checkbox" v-model="r" @change="CheckBoxChange()">
        <label for="">Write</label>
        <input type="checkbox" v-model="w" @change="CheckBoxChange()">
        <label for="">Execute</label>
        <input type="checkbox" v-model="e" @change="CheckBoxChange()">
    </div>
</template>
<!-- 0=---, 1=--x, 2=-w-, 3=-wx, 4=r--, 5=r-x, 6=rw-, 7=rwx -->
<script>
    export default {
        name: "PermissionVue",
        data() {
            return {
                code: '',
                r: false,
                w: false,
                e: false
            }
        },
        methods: {
            CheckBoxChange() {
                this.code = ""
                if (this.r)  this.code = Number(this.code) + 4;
                if (this.w)  this.code = Number(this.code) + 2;
                if (this.e)  this.code = Number(this.code) + 1;
                // Donc  si on coche la case read ca modifie la variable code en l'additionnant de 4
                // Number permet de convertir une variable  en nombre si elle est un string
            },
            PermissionChange() {
                switch(this.code) {
                    case '0': 
                        this.r = false;
                        this.w = false;
                        this.e = false
                        break
                    case '1': 
                        this.r = false;
                        this.w = false;
                        this.e = true
                        break
                    case '2': 
                        this.r = false;
                        this.w = true;
                        this.e = false
                        break
                    case '3': 
                        this.r = false;
                        this.w = true;
                        this.e = true
                        break
                    case '4': 
                        this.r = true;
                        this.w = false;
                        this.e = false
                        break
                    case '5': 
                        this.r = true;
                        this.w = false;
                        this.e = true
                        break
                    case '6': 
                        this.r = true;
                        this.w = true;
                        this.e = false
                        break
                    case '7': 
                        this.r = true;
                        this.w = true;
                        this.e = true
                        break
                }
            }

        }
    }
</script>

<style lang="scss">

</style> 