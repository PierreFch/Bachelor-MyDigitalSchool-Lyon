<template>
    <div class="reset">
      <input type="reset" v-bind:value="value" v-on:click="$emit('reset')">
    </div>
</template>

<script>  
export default{
name: 'ResetSubmit',
  props: {
    value: String
  }
}
</script>

<style scoped>
input{
  border: 0;
  background: #2c3e50;
  opacity: 0.8;
  color: #FFF;
  padding: 10px 25px;
  cursor: pointer;
}
</style>
