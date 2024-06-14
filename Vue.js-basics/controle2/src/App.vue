<template>
  <div class="container">
    <h1>Controle n°2 : Pierre Faucheur</h1>
    <div class="content">
      <div class="left">
        <div class="picture">
          <img src="./assets/tringles-rail.jpg" alt="Tringle Rail" title="Rail de tringle à rideau, habilleur d'intérieur à Lyon" />
        </div>
      </div>
      <div class="right">
        <h2>Personnalisez votre produit :</h2>
        <form @submit.prevent="submit" v-if="!successful">
          <div class="step" id="step1">
            <h3>J’indique mes dimensions</h3>
            <TextInput label="Longueur du rail" name="dimensions"/>
            <NextButton text="valider" v-on:nextStep="incrementStep1()" v-on:click="step='Etape 2' /* && color='red' */"/> <!-- Lorsqu'on clique pour passer à l'étape 2, la variable prend pour valeur "red" (mettre en rouge les étapes dans la liste des étapes en bas de page) -->
          </div>
          <div class="step" id="step2" v-if="step === 'Etape 2' || step === 'Etape 3'">
            <h3>J’indique mon type de rail</h3>
            <RadioInputRails name="rail"/>
            <NextButton text="valider" v-on:click="step='Etape 3'" v-on:nextStep="incrementStep2()"/>
          </div>
          <div class="step" id="step3" v-if="step === 'Etape 3'">
            <h3>Je sélectionne ma couleur</h3>
            <RadioInputColor name="color"/>
            <NextButton text="valider" v-on:nextStep="incrementStep3()"/>
          </div>
          <div class="totalPrice">
            <Step text="Veuillez valider toutes les étapes de la personnalisation"/>
            <SubmitInput v-bind:price="price" value="Ajouter au panier" />
          </div>
          <div class="success" v-if="successful"> 
              Produit ajouté au panier avec succès !
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import RadioInputRails from './components/input/RadioInputRails.vue';
import RadioInputColor from './components/input/RadioInputColor.vue';
import TextInput from './components/input/TextInput.vue';
import NextButton from './components/button/NextButton.vue';
import SubmitInput from './components/input/SubmitInput.vue';
import Step from './components/Step.vue';

// import axios from 'axios'     L'installation d'Axios freeze et ne finalise pas (étrange..)

export default {
  name: 'App',
  components: {
    RadioInputRails,
    RadioInputColor,
    TextInput,
    NextButton,
    SubmitInput,
    Step,
  },
  data() {
    return {
      step: 'Etape 1',
      color: '',
      price: 0
    }
  },
  methods: {
    incrementStep1(){
      if(this.price.value >= 100){ // J'ai conscience qu'on ne vient pas récupérer la valeur du prix, comme ici, mais la valeur de l'input de mon TextInput.vue
        this.price = this.price += 150;
        return this.price;
      }else{ 
        this.price = this.price += 80; 
        return this.price;}
    },
    incrementStep2(){
      this.price = this.price += 50;
      return this.price;
    },
    incrementStep3(){
      this.price = this.price += 20;
      return this.price;
    },
  },
  // mounted () {
  //   axios
  //     .get('https://calendrier.api.gouv.fr/jours-feries/metropole.json')
  //     .then(response => (this.info = response))
  // }
}
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
body{
  font-size: 1em;
  font-family: 'nunito',sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
  margin-top: 40px;
  counter-reset: step;
}
h1{text-align: center; margin-bottom: 60px}
img{max-width: 100%;}
div.container{
  max-width: 1100px;
  padding: 0 20px;
  margin: auto;
}
div.left, div.right{
  width: calc(50% - 40px);
  margin: 0 20px;
  display: inline-block;
  vertical-align: top;
}
h3{
  font-weight: 500;
  padding-left: 50px;
  position: relative;
  font-size: 1.1em;
}
h3::before{
  content: counter(step);
  position: absolute;
  background: #BDDDE8;
  font-weight: 700;
  height: 40px;
  width: 40px;
  border-radius: 50%;
  left: 0;
  top: -10px;
  counter-increment: step;
  counter-increment: step;
  display: flex;
  justify-content: center;
  align-items: center;
}
.step{
  padding: 10px 0;
  border-top: 1px solid #B4DEE9;
}
div.bottom{
  padding: 20px 0;
  text-align: right;
}
.success{
  font-size: 1.5em;
  color: #a7c957;
}
</style>