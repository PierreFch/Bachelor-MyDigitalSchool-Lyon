<template>
<div class="image">
  <img alt="Vue logo" src="./assets/logo.png">
</div>
  <div v-if="step === 'Etape 1'" class="title">
     <Title title="Inscription" :style="{color:colorie}"/>
  </div>
  <div v-if="step === 'Etape 2'" class="title">
     <Title title="Livraison" :style="{color:colorie}"/>
  </div>
  <div v-if="step === 'Etape 3'" class="title">
     <Title title="Paiement" :style="{color:colorie}"/>
  </div>
  <form id="contactForm" v-on:submit.prevent="onSubmit">
    <div v-if="step === 'Etape 1'" class="step">
      <div class="text">
        <div class="name">
            <TextInput name="name" label="Nom"/>
        </div>
        <div class="name">
            <TextInput name="firstname" label="Prénom"/>
        </div>
      </div>
      <div class="radio">
        <RadioInput name="gender" label="Sexe :"/>
      </div>
      <div class="date">
        <DateInput name="bornDate" label="Date de naissance"/>
      </div>
      <div class="textarea">
        <Textarea name="textarea" label="Description" />
      </div>
    </div>
    <div v-if="step === 'Etape 2'" class="step">
      <div class="select">
        <SelectList name="workList" label="Profession :"/>
      </div>
    </div>
    <div v-if="step === 'Etape 3'" class="step">
      <div class="skills">
          <CheckInput label="Compétences :"/>
      </div>
    </div>
    <div class="submit">
        <ResetSubmit value="Réinitialiser" v-on:reset="colorie='#d00000'"/>
        <div v-if="step === 'Etape 1'">
          <ValidationSubmit value="Suivant" v-on:click="step='Etape 2'" v-on:validation="colorie='#42b983'"/>
        </div>
        <div v-if="step === 'Etape 2'">
          <ValidationSubmit value="Suivant" v-on:click="step='Etape 3'" v-on:validation="colorie='#42b983'"/>
          <input type="submit" value="Retour en arrière" v-on:click="step='Etape 1'" class="back">
        </div>
        <div v-if="step === 'Etape 3'">
          <ValidationSubmit value="Valider" v-on:validation="colorie='#42b983'"/>
          <input type="submit" value="Retour en arrière" v-on:click="step='Etape 2'" class="back">
        </div>
    </div>
    <div class="message">
        <ErrorMessage message="Erreur lors de l'envoi"/>
        <SuccessMessage message="Message envoyé avec succès"/>
    </div>
  </form>
</template>

<script>  
  import Title from'./components/title/Title.vue';
  import TextInput from'./components/input/TextInput.vue';
  import RadioInput from './components/input/RadioInput.vue';
  import DateInput from './components/input/DateInput.vue';
  import Textarea from './components/textarea/Textarea.vue';
  import SelectList from './components/select/SelectList.vue';
  import CheckInput from './components/input/CheckInput.vue';
  import ValidationSubmit from './components/submit/ValidationSubmit.vue';
  import ResetSubmit from './components/submit/ResetSubmit.vue';
  import ErrorMessage from './components/message/ErrorMessage.vue';
  import SuccessMessage from './components/message/SuccessMessage.vue';
  export default {
  name: 'App',
    components: {
      Title,
      TextInput,
      RadioInput,
      DateInput,
      Textarea,
      SelectList,
      CheckInput,
      ValidationSubmit,
      ResetSubmit,
      ErrorMessage,
      SuccessMessage
    },
    data() {
    return {
      colorie: '#42b983',
      step: 'Etape 1'
    }
  }
  }
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
  margin-top: 60px;
  text-align: center;
}
form#contactForm{
  text-align: left;
  width: 40%;
  margin: auto;
}
form#contactForm > div > div{
  margin: 10px;
}
div.text:nth-of-type(1){
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}
label{
  padding: 0 5px 5px 0;
  font-size: 1.1em;
}
input, textarea{
  font-family: Avenir, Helvetica, Arial, sans-serif;
  font-size: 1em;
  min-height: 25px;
  width: 100%;
}
input[type="radio"], input[type="checkbox"]{
  width: auto;
}
textarea{
  resize: none;
}
div.radio span, div.check span{
  font-size: 1.1em;
}
div.radio label, div.check label{
  font-size: 1em;
  padding-bottom: 0;
  cursor: pointer;
}
div.radio input, div.check input{
  min-height: auto;
}
div.submit{
  display: flex;
  justify-content: space-around;
  align-items: flex-start;
  padding: 20px 0;
}
input[type="submit"]{
  min-width: 170px;
}
input.back{
  border: 0;
  background: #2c3e50;
  opacity: 0.8;
  color: #FFF;
  padding: 10px 25px;
  cursor: pointer;
  margin: 10px 0;
}

</style>
