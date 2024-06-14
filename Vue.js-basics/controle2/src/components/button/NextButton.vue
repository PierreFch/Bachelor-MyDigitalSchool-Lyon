<template>
  <div class="bottom">
      <div class="validation">
        <button class="next" v-on:click="$emit('nextStep')">{{text}}</button>
      </div>
  </div>
</template>

<script>  
export default{
name: 'NextButton',
  props: {
    text: String
  }
}
</script>

<style scoped>
button{
  border: 0;
  background: #0C1251;
  color: #FFF;
  padding: 10px 25px;
  cursor: pointer;
  text-transform: uppercase;
  font-size: 1em;
  font-weight: 500;
}
</style>
