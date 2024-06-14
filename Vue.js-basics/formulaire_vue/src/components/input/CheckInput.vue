<template>
<span>{{label}}</span>
  <div v-for="skill in skills" :key="skill.text" class="skill">
    <input type="checkbox" v-bind:id="skill.nameId" v-bind:name="skill.nameId" v-bind:value="skill.value"> 
    <label v-bind:for="skill.nameId">{{skill.text}}</label>
  </div>
</template>

<script>  
export default{
  name: 'CheckInput',
  props: {
    name: String,
    label: String,
    value: String,
    nameId: String
  },
  data(){
    return{
      skills: [
        {text: 'Marketing', value: 'Marketing', nameId: 'marketing'},
        {text: 'Développement', value: 'developpement', nameId: 'developpement'},
        {text: 'Webdesign', value: 'webdesign', nameId: 'webdesign'},
        {text: 'Product Managment', value: 'productManagment', nameId: 'productManagment'}
      ]
    }
  }
}
</script>

<style>

</style>
