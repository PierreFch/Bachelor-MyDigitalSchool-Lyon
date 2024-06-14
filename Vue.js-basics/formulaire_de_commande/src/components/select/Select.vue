<template>
<div class="selectList">
    <label v-bind:for="name">{{label}}</label>
    <select v-bind:id="name" v-bind:name="name" v-model="selected" @change="onChange($event)">
      <option v-for="option in options" :key="option.text" v-bind:value="option.value">{{ option.text }}</option>
    </select>
</div>
</template>

<script>  
export default{
  name: 'Select',
  props: {
    label: String,
    name: String
  },
  data(){
    return{
      selected: '1',
      options: [
        {text: 'Blue', value: '1'},
        {text: 'Vert', value: '2'},
        {text: 'Rouge', value: '3'},
      ],
        methods: {
        onChange(event) {
            console.log(event.target.value)
        }
    }
    }
  }
}
</script>

<style scoped>
label{
    display: block;
    margin-bottom: 5px;
}
select{
    border: 1px solid #000;
    background: #35495E;
    color: #FFF;
    padding: 5px 20px;
    font-size: 1em;
    cursor: pointer;
    width: 100%;
}
.selectList{
    display: block;
    margin: 20px 0;
}

</style>