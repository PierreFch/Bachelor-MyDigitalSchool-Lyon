<template>
    <label v-bind:for="name">{{label}}</label>
    <input type="text" v-bind:id="name" v-bind:name="name">
</template>

<script>  
export default{
  name: 'TextInput',
  props: {
    label: String,
    name: String
  }
}
</script>

<style>

</style>
