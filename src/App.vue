<template>
  <div id="app">
    <Avatar />
    <Description />
    <div class="links">
      <Link url="https://www.instagram.com/devdiegogomes/" legend="Instagram" theme="instagram" />
      <Link url="https://www.linkedin.com/in/diego-ramos-493221176/" legend="Linkedin" theme="linkedin" />
      <Link url="https://github.com/DiegoRamosGomes/" legend="Github" theme="github" />
      <Link url="mailto:contato@digomes.com.br" legend="Email" theme="mail" />
      <Link url="https://wa.me/?phone=5548991417009" legend="Whatsapp" theme="whatsapp" />
    </div>
  </div>
</template>

<script>
import Avatar from './components/Avatar.vue'
import Description from './components/Description.vue'
import Link from './components/Link'

export default {
  name: 'App',
  components: {
    Avatar,
    Description,
    Link
  }
}
</script>

<style>
body {
  margin: 0;
  background-color: #131b22;
  color: white;
}
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  width: 60%;
  margin: auto;
}

.links {
  padding: 50px 0 10px;
  display: flex;
  justify-content: center;
}

@media only screen and (max-width: 600px) {
  #app {
    width: 90%;
  }

  .links {
    display: block;
  }
}
</style>
