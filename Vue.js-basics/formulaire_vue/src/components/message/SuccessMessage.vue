<template>
    <div class="success">
      <p>{{message}}</p> 
    </div>
</template>

<script>  
export default {
  name: 'SuccessMessage',
  props: {
    message: String
  }
}
</script>

<style scoped>
p{
  color: #42b983;
}
</style>
