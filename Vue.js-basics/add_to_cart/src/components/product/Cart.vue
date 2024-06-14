<template>
    <div class="cart">
      <h2>Panier</h2>
      <div>
        
      </div>
    </div>
</template>

<script>
export default {
  name: 'Cart',
  data(){
      return{
        cart:[],
        settings: ["id", "text", "description", "price"],
        ticket:{
          product: null,
          total: 0
        },
        counter: 0,
      }
  },
  methods:{
    add(product){
      this.products[product.id-1].cart=true
      this.cart.push(product)
      this.counter++
    },
    clean(){
      this.cart=[];
      for (const key in this.products){
        this.products[key].cart=false
        this.products[key].quantity=1
      }
      this.$refs['modal-1'].hide()
    },
    remove(id){
      for (let index = 0; index < this.cart.length; index++){
        if(this.cart[index].id == id){
          this.cart.splice(index,1);
        }
      }
    },
    buy(){
      this.ticket={
        products: this.cart,
        total: this.total
      }
      this.$refs['modal-1'].show()
    },
    increment(id){
      for (let index = 0; index < this.cart.length; index++){
        if(this.cart[index].id == id){
          this.cart[index].quantity++
        }
      }
    },
    decrement(id){
      for (let index = 0; index < this.cart.length; index++){
        if(this.cart[index].id == id){
          this.cart[index].quantity--
        }
      }
    },
  },
  computed: {
    total(){
      let t=0;
      for (let index= 0; index < this.cart.length; index++){
        t += this.cart[index].price*this.cart[index].quantity
      }
      return t
    }
  }
}
</script>

<style scoped>
.cart{
  border: 1.5px solid #1A1A1C;
  padding: 0 20px 20px;
  margin: 20px 0;
}
</style>