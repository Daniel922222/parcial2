<template>
  <div id="app">
    <nav class="nav" >
      <a class="nav-link active" aria-current="page" href="#Home">Agregar libros</a>
      <a class="nav-link" aria-current="page" href="#Evidencias">edit registro</a>
    </nav>
    <br>
    <br>

    <img alt="targarien logo" width="200" src="https://www.freepngimg.com/thumb/tv_shows/33666-5-house-targaryen-clipart.png"/>
    <Agregarlibro/>
  </div>
</template>

<script>
import Agregarlibro from "./components/Agregarlibro.vue"

export default {
  name: 'App',
  components: {
    Agregarlibro
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
