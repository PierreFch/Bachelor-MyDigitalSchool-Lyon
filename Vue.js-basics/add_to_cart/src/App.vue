<template>
  <div class="container">
  <Title msg="Ma boutique en ligne"/>
    <!--<div class="cart">
      <button data-toggle="modal" data-target="#cartModal">Mon panier : ({{totalItems}})</button>
    </div>-->
    <Cart />
    <div class="list">
      <ViewList />
    </div>
  </div>
</template>

<script>
import Title from './components/Title.vue';
import ViewList from './components/product/list/ViewList.vue';
import Cart from './components/product/Cart.vue';
export default {
  name: 'App',
  components: {
    Title,
    ViewList,
    Cart
  }
}
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
*{
  box-sizing: border-box;
}
body{
  color: #1A1A1C;
  font-family: 'Montserrat', sans-serif;
  font-size: 1em;
  margin-top: 20px;
}
div.container{
  max-width: 1200px;
  padding: 0 20px;
  margin: auto;
}
img{
  max-width: 100%;
}
.list{
    display: flex;
    flex-wrap: wrap;
    align-items: flex-start;
}
.cart button{
  border: 0;
  background: #e76f51;
  color: #FFF;
  padding: 10px 20px;
  cursor: pointer;
}
</style>
