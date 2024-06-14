<template>
<span>{{label}}</span>
<span v-for="gender in genders" :key="gender.text">
    <input type="radio" v-bind:id="gender.nameId" v-bind:name="name" v-bind:value="gender.value">
    <label v-bind:for="gender.nameId" >{{gender.text}}</label>
</span>
</template>

<script>  
export default{
  name: 'RadioInput',
  props: {
    name: String,
    label: String,
    value: String,
    nameId: String
  },
  data(){
    return{
      genders: [
        {text: 'Homme', value: 'man', nameId: 'man'},
        {text: 'Femme', value: 'woman', nameId: 'woman'},
      ]
    }
  }
}
</script>
<style>

</style>
