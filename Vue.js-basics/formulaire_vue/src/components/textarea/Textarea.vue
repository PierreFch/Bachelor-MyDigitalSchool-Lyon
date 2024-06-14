<template>
      <label v-bind:for="name">{{label}}</label>
      <textarea v-bind:id="name" v-bind:name="name"></textarea>
</template>

<script>  
export default{
  name: 'Textarea',
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
