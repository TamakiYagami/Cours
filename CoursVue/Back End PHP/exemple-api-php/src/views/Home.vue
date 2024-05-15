<template>
  <div class="home">
    <input type="text" v-model="username">
    <button @click="Click()">Enregistrer</button>
    {{  test }}
  </div>
</template>

<script>
import axios from "axios"

export default {
  name: 'HomeView',
  data() {
    return {
      username: '',
      test: ''
    }
  },
  methods: {
    Click() {
      let Donnee = new FormData()
      Donnee.append("username", this.username)
      axios.post("http://localhost/Cours/CoursVue/API-PHP/InsertUsername.php", Donnee)
      .then(result => this.test = result.data)
    }
  },
}
</script>
