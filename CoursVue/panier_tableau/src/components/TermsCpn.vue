<template>
    <div>
        <h2>{{terme}}</h2>
        <h2>{{definition}}</h2>

    </div>
</template>

<script>
    export default {
       props: {
        terme: {
            type: String
        },
        definition: {
            type: String
        }
       }, 
    }
</script>

<style lang="scss" scoped>

</style>