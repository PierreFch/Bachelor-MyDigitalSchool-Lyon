<template>
<!--<p>{{info}}</p>-->
  <div class="container">
  <h2>{{title}}</h2>
    <div class="content">
      <div class="data" v-for="data in info" :key="data">
          <div class="data">Id: <span>{{ data.owner.id}}</span></div>
          <div class="data">Login: <span>{{data.owner.login }}</span></div>
          <div class="data">Avatar url: <span>{{data.owner.avatar_url }}</span></div>
        </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  name: 'APIgithub',
  props: {
    title: String
  },
  data(){
    return{
      info: null,
    }
  },
  mounted () {
    axios
      .get('https://api.github.com/users/PierreFch/repos')
      .then(response => (this.info = response.data))
  },
}
</script>

<style scoped>
.container{
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 30px;
}
.data{
  margin: 5px 0;
  color: #D6D6D6;
}
.data span{
  color: #FFF;
}
</style>
