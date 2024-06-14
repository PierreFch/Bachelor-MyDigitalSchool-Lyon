<template>
  <div class="btn">
    <button>{{text}}</button>
  </div>
</template>

<script>
export default {
  name: 'Button',
  props: {
    text: String
  }
}
</script>

<style scoped>
button{
  margin: 10px;
  padding: 5px 15px;
  border-radius: 0;
  border: 1.5px solid #303030;
  background: none;
  cursor: pointer;
  font-size: 1em;
}
</style>
