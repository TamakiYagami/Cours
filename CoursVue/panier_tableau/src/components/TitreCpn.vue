<template>
    <div>
        <h1>{{ titre }}</h1>
    </div>
</template>

<script>
    export default {
        name: 'TitreCpn',
        props: {
            titre: {
                type: String,
                default: "Grand Titre De merde"
            },
        },
    }
</script>

<style lang="scss" scoped>

</style>