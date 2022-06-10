<template>
  <div class="container">
    <img :src="'/images/eu.jpeg'"
         alt="Avatar" class="avatar">
  </div>
</template>

<script>
export default {
  name: "Avatar"
}
</script>

<style scoped>
.container {
  padding: 50px 0 30px;
}
.avatar {
  width: 10rem;
  border-radius: 50%;
}
</style>