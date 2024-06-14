<template>
    <div class="stepList">
    <p>{{text}}</p>
        <ul>
            <li :style="{color:color}"><a href="#step1" title="">1</a></li> <!-- Lorsqu'on est sur l'étape 1, la couleur prend la valeur renseignée dans App.vue -->
            <li :style="{color:color}"><a href="#step2" title="">2</a></li>
            <li :style="{color:color}"><a href="#step3" title="">3</a></li>
        </ul>
    </div>  
</template>

<script>
export default {
  name: 'TextInput',
  props: {
    text: String
  }
}
</script>

<style scoped>
.stepList{
    counter-reset: step;
    text-align: center;
}
ul{
    padding-left: 0;
    display: flex; 
    align-items: center;
    justify-content: center;
}
li{
    background: #BDDDE8;
    font-weight: 700;
    height: 40px;
    width: 40px;
    border-radius: 50%;;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    list-style: none;
    margin: 0 10px;
    opacity: 0.5;
}
a{
    text-decoration: none;
    color: initial;
}
a::before{
    content:'';
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}
</style>
