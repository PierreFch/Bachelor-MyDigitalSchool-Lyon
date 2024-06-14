<template>
    <div class="hours">
        <div class="label">{{label}}</div>
        <span v-for="hour in hours" :key="hour.text" class="hour">
            <input type="radio" v-bind:value="hour.value" v-bind:name="name" v-bind:id="hour.Id" v-bind:class="hour.class">
            <label v-bind:for="hour.Id" v-bind:class="hour.class">{{hour.value}}</label>
        </span>
    </div>  
</template>

<script>
export default {
  name: 'RadioInput',
  props: {
    label: String,
    name: String,
    value: String,
    Id: Number
  },
  data(){
      return{
          hours:[
              {text: '12:00', value: '12:00', Id:"1"},
              {text: '12:30', value: '12:30', Id:"2"},
              {text: '13:00', value: '13:00', Id:"3"},
              {text: '13:30', value: '13:30', Id:"4"},
              {text: '14:00', value: '14:00', Id:"5", class:"prime"},
              {text: '14:30', value: '14:30', Id:"6", class:"prime"},
              {text: '15:00', value: '15:00', Id:"7", class:"prime"},
              {text: '15:30', value: '15:30', Id:"8"},
              {text: '16:00', value: '16:00', Id:"9"},
              {text: '18:00', value: '18:00', Id:"10", class:"premium"},
              {text: '18:30', value: '18:30', Id:"11", class:"premium"},
              {text: '19:00', value: '19:00', Id:"12", class:"premium"},
              {text: '19:30', value: '19:30', Id:"13", class:"premium"},
          ]
      }
  }
}
</script>

<style scoped>
    label.premium{
        color: #2dc653;
    }
    input.premium{
        border: 1.5px solid #2dc653;
    }
    label.prime{
        color: #560bad;
    }
    input.prime{
        border: 1.5px solid #560bad;
    }
</style>
