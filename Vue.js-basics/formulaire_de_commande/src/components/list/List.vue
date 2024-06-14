<template>
<div class="list">
    <ul>
        <li v-for="item in cart" v-bind:key={item}>{{item}}</li> 
    </ul>
    <button v-on:click="$emit('update-cart', cart)">Passer ma commande</button>
</div>

</template>
 
<script>
export default {
 name: 'List',
 data(){
 return {
 cart: ['pain', 'fromage', 'fleurs', 'vin']
 }
 }
}
</script>
 
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
button{
    margin: 20px 0;
    padding: 15px 20px;
    border: 0;
    background: #41b883;
    color: #FFF;
    cursor: pointer;
    font-size: 1em;
}
</style>