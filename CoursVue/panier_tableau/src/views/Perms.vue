<template>
    <div>
        <label for="">Code :</label>
        <input type="number" min="0" max="7" maxlength="1">
        <br>
        <label for="">Read</label>
        <input type="checkbox">
        <label for="">Write</label>
        <input type="checkbox">
        <label for="">Execute</label>
        <input type="checkbox">
    </div>
</template>

<script>
    export default {
        name: "PermissionVue",
        data() {
            return {
            }
        },
    }
</script>

<style lang="scss">

</style> 