<template>
  <div class="home">
    <input type="text" v-model="username">
    <button @click="Click()">Enregistrer</button>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  name: 'HomeView',
  data() {
    return {
      username: ''
    }
  },
  methods: {
    async Click() {
      await axios.post("http://localhost:5000/create", {username: this.username})
    }
  },
}
</script>
