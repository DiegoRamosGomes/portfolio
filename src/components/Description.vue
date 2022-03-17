<template>
  <div class="container">
    <p class="my-name"><strong>Diego Ramos Gomes</strong></p>
    <p class="its-me">Este é meu nome.</p>
    <p class="what-am-i">Sou desenvolvedor web, especializado em Back-end</p>
    <p class="since-when">Trabalho com programação desde 2019 e estudo essa área desde os meus 15 anos</p>
    <p class="contact-me">Abaixo estão minhas redes sociais e formas de contato para que possamos conversar um pouco sobre como eu posso lhe ajudar</p>
  </div>
</template>

<script>
export default {
  name: "Description"
}
</script>

<style scoped>
  .container p {
    margin: 10px 0;
    font-family: monospace;
    letter-spacing: 1px;
  }

  p.my-name {
    font-size: 20px;
    margin-bottom: 30px;
  }

  p.its-me, p.what-am-i, p.since-when, p.contact-me {
    font-size: 17px;
  }
</style>