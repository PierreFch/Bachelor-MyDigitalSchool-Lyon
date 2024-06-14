<template>
<div class="picture">
  <img alt="Vue logo" src="./assets/logo.png">
</div>
  <div class="container">
    <HelloWorld msg="Choisi moi une couleur !" :style="{color:color}" @update-cart="updateCart"/>
    <div class="selectList">
      <Button text="bleu" v-on:click="color='#48cae4'"/>
      <Button text="vert" v-on:click="color='#41B883'"/>
      <Button text="rouge" v-on:click="color='#d00000'"/>
    </div>
    <Select label="Choisir une couleur :"/>
    <List />
  </div>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue';
import Button from './components/button/Button.vue';
import List from './components/list/List.vue';
import Select from './components/select/Select.vue';

export default {
  name: 'App',
  data(){
    return{
      color: '',
    }
  },
  components: {
    HelloWorld,
    Button,
    List,
    Select
  },
  methods: {
  updateCart(toto) {
    console.log("mettre à jour panier");
    console.log(toto)
    //this.cart.push(e);
    //this.total = this.shoppingCartTotal;
  },
  emptyCart() {
    console.log('vider mon panier')
    }
  },
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #303030;
  margin-top: 60px;
}
.picture, h1{
  text-align: center;
}
.container{
  max-width: 400px;
  margin: auto;
  padding: 0 20px;
}
.selectList{
  display: flex;
  justify-content: space-between;
}
.list ul{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
</style>
