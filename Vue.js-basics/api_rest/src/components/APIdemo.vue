<template>
  <div class="app">
    <h2>{{ title }}</h2>
    <!--<p>{{info}}</p>-->
    <div class="container">
      <div class="content">
        <div class="currency" v-for="currency in info" :key="currency">
          {{ currency.description }}:
          <span class="lighten">
            <span v-html="currency.symbol"></span>{{ currency.rate_float }}
          </span>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  name: 'APIdemo',
  props: {
    title: String
  },
  data(){
    return{
      info: null,
    }
  },
  // filters: {
  // currencydecimal (value) {
  //   return value.toFixed(2)
  //   }
  // },
  mounted () {
    axios
      .get('https://api.coindesk.com/v1/bpi/currentprice.json')
      .then(response => (this.info = response.data.bpi))
  },
}
</script>

<style scoped>
h2 {
  text-align: center;
}
.container{
  display: flex;
  justify-content: center;
}
.currency{
  margin: 5px 0;
  color: #D6D6D6;
}
.lighten{
  color: #FFF;
}
</style>
