<template>
    <label v-bind:for="name">{{label}}</label>
    <input type="date" v-bind:id="name" v-bind:name="name">
</template>

<script>  
export default{
  name: 'DateInput',
  props: {
    label: String,
    name: String
  }
}
</script>

<style scoped>
  label{
    display: block;
  }
</style>
