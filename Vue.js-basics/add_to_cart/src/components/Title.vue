<template>
  <div class="title">
    <h1>{{ msg }}</h1>
  </div>
</template>

<script>
export default {
  name: 'Title',
  props: {
    msg: String
  }
}
</script>

<style scoped>
.title{
  text-align: center;
  padding: 10px 0;
}

h1{
  font-weight: 600;
}
</style>