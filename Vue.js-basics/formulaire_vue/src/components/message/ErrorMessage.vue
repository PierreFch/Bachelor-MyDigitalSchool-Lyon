<template>
    <div class="error">
        <p>{{message}}</p> 
    </div>
</template>

<script>  
  export default {
  name: 'ErrorMessage',
  props: {
    message: String
  }
}
</script>

<style scoped>
p{
    color: #d00000;
}
</style>
