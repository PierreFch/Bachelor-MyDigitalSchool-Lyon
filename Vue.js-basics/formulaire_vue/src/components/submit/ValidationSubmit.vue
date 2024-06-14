<template>
    <div class="validation">
      <input type="submit" v-bind:value="value" v-on:click="$emit('validation')">
    </div>
</template>

<script>  
export default{
name: 'ValidationSubmit',
  props: {
    value: String
  }
}
</script>

<style scoped>
input{
  border: 0;
  background: #42b983;
  color: #FFF;
  padding: 10px 25px;
  cursor: pointer;
}
</style>
