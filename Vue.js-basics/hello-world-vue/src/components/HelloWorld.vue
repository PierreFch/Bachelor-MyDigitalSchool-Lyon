<template>
  <div class="hello">
    <h1>Hello world</h1>
    <div id="nameList">
    <div class="listContent">
        <ul class="list" v-if="isHidden">
          <li v-for="name in items" :key="name.item">{{ name.item }}</li>
        </ul>
    </div>
        <div class="bottom">
          <button v-show="!isHidden" v-on:click="isHidden = true">Afficher la liste</button>  
          <button v-show="isHidden" v-on:click="isHidden = false">Cacher la liste</button>
        </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'HelloWorld',
  props: {
    msg: String
  },
   data(){
    return {
      items: [
       {item: 'Arthur'},
       {item: 'Pierre'},
       {item: 'Mathis'},
       {item: 'Bob'},
       {item: 'L\'éponge'}
     ],
     isHidden: true
    }
  },
}

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}

ul.list li{
  margin: 10px;
}

.listContent{
  min-height: 50px;
}

li {
  display: inline-block;
  margin: 0 10px;
}
button {
  background: #42b983;
  color: #FFF;
  padding: 10px 30px;
  margin: 10px;
  border-radius: 5px;
  text-decoration: none;
  border: 0;
  cursor: pointer;
}
</style>
