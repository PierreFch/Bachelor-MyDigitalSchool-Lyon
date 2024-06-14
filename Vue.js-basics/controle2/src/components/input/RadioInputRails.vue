<template>
    <div class="option">
        <span v-for="selected in selections" :key="selected.text" class="select">
            <input type="radio" v-bind:value="selected.value" v-bind:name="name" v-bind:id="selected.Id" v-on:click="isActive = !isActive">
            <label v-bind:for="selected.Id">
            {{selected.title}}
                <span>({{selected.description}})</span>
            </label>
        </span>
    </div>  
</template>

<script>
export default {
  name: 'RadioInputRails',
  props: {
    label: String,
    name: String,
    value: String,
    Id: Number
  },
  data(){
      return{
          selections:[
              {Id:"1", title:'Modèle DS : Fixation au plafond pour rideaux légers', description: 'sans doublure, hauteur max 300cm', price:50},
              {Id:"2", title:'Modèle CS : Fixation au plafond ou au mur pour rideaux lourds', description: 'doublé, hauteur + 300 cm', price:30}
          ],
          isActive: false
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
