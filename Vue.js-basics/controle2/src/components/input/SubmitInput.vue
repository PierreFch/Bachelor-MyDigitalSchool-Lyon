<template>
  <div class="bottom">
    <div class="totalPrice">
        <span>{{price}}€ </span>TTC
    </div>
    <div class="add">
        <input type="submit" class="submit" v-bind:value="value" v-on:click="$emit('addToCart')"/>
    </div>
  </div>
</template>

<script>  
export default{
name: 'NextButton',
  props: {
    value: String,
    price: Number
  },
}
</script>

<style scoped>
div.bottom{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px;
    background: rgb(180,222,233,0.6);
}
input{
  border: 0;
  background: #0C1251;
  color: #FFF;
  padding: 15px 40px;
  cursor: pointer;
  text-transform: uppercase;
  font-size: 1em;
  font-weight: 500;
}
div.totalPrice{
  width: 50%;
  text-align: center;
}
div.totalPrice span{
  font-size: 1.5em;
  font-weight: 500;
}
</style>
