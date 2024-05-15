<template>
  <div id="app">
    <router-link class="link" to="/">Home</router-link> / 
    <router-link class="link" to="clickme">Click Me</router-link> / 
    <router-link class="link" to="paravue">Paragraphe</router-link> / 
    <router-link class="link" to="alouette">Alouette</router-link> / 
    <router-link class="link" to="perms">Permission</router-link> / 
    <router-link class="link" to="titre">Titre</router-link>
    <br><br><br><br><br>
    <router-view/>
  </div>
</template>

<style lang="scss">
.link {
  font-size: 1.5em;
  padding: 10px;
  text-decoration: none;
  color: chartreuse;
  font-family: 'Times New Roman', Times, serif;
}
</style>
