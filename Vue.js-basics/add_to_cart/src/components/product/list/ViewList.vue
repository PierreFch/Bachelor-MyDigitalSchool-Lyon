<template>
    <div class="item" v-for="item in items" :key="item.text">
        <div class="picture">
            <img src="https://fakeimg.pl/300x150/" alt="Image produit" title="magasin de quelque chose quelque part">
        </div>
        <div class="description">
            <h3>{{item.text}}</h3>
            <p>{{item.description}}</p>
            <div class="bottom">
                <div class="quantity">
                    <input type="number" id="quantity" name="quantity" min="1" placeholder="Quantité" v-model="item.qty"/>
                </div>
                <div class="flex">
                    <div class="add">
                        <button v-on:click="addToCart(id)">Ajouter au panier</button>
                    </div>
                    <div class="price">
                        <p>{{item.price}}€</p>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</template>

<script>
export default {
  name: 'ViewList',
  props: {},
  data(){
      return{
          items: [
                {id: 0, text: "Produit 1", description: "Mon premier produit à vendre", price: 10},
                {id: 1 , text: "Produit 2", description: "Mon deuxième produit à vendre", price: 20},
                {id: 2 , text: "Produit 3", description: "Mon troisème produit à vendre", price: 30},
                {id: 3 , text: "Produit 4", description: "Mon quatrième produit à vendre", price: 5},
                {id: 4 , text: "Produit 5", description: "Mon cinquième produit à vendre", price: 2},
                {id: 5 , text: "Produit 6", description: "Mon sixième produit à vendre", price: 40},
          ],
          cart: [],
      }
  },
  methods: {
    addToCart(id) {
      this.$store.dispatch("addToCart", id);
    }
  }
}
</script>

<style scoped>
.item{
    margin: 20px;
    width: calc(23% - 20px);
    box-shadow: 0 10px 15px 5px #EBEBEB;
}
img{width: 100%;}
.description{
    padding: 20px;
}
h3{
    margin: 0;
}
.flex{
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.price p{
    font-weight: 600;
    font-size: 1.1em;
}
button{
    border: 1.5px solid transparent;
    background: #1A1A1C;
    color: #FFF;
    padding: 10px 20px;
    font-size: 0.9em;
    cursor: pointer;
    transition-duration: 150ms;
    margin: 10px 0;
}
button:hover{
    border: 1.5px solid #1A1A1C;
    background: #FFF;
    color: #1A1A1C;
}
</style>