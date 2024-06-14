<template>
    <div class="option">
        <span v-for="selected in selections" :key="selected.text" class="select">
            <input type="radio" v-bind:value="selected.value" v-bind:name="name" v-bind:id="selected.Id">
            <label v-bind:for="selected.Id">
            {{selected.title}}
            </label>
        </span>
    </div>  
</template>

<script>
export default {
  name: 'RadioInputColor',
  props: {
    label: String,
    name: String,
    value: String,
    Id: Number
  },
  data(){
      return{
          selections:[
              {Id:"1", title:'Blanc', price:20},
              {Id:"2", title:'Noir', price:20}
          ]
      }
  }
}
</script>

<style scoped>
div.option{
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
}
span.select{
    width: calc(50% - 30px);
    display: inline-block;
    position: relative;
    padding: 10px;
    text-align: center;
}
input{
    appearance: none;
    -webkit-appearance: none;
    margin: 0;
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    top: 0;
    cursor: pointer;
    border: 1px solid #B4DEE9;
}

input:focus{
    background: rgb(180,222,233,0.6);
}
input:focus + label{
   z-index: 1;
   position: relative;
}
label{
    font-weight: 700;   
}
label span{
    display: block;
    color: #222222;
    font-size: 0.8em;
    font-weight: 400;
}
</style>
