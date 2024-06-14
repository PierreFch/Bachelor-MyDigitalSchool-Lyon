<template>
  <section class="contact">
    <div class="container">
        <form class="contactForm" v-on:submit.prevent="onSubmit">
        <DateInput label="Choisissez une date" name="date" />
        <RadioInput label="Choisissez un horaire" name="hour" />
        <ErrorMessage v-if="success === 'false'"/>
        <div class="information">
          <div class="picture">
            <img src="./assets/information.png" alt="Information" title=""/>
          </div>
          <div class="text">
            <p>Infos à propos des horaires disponibles</p>
          </div>
          <div class="list">
            <div class="column" id="regular">
              <p>Regular slots</p>
              <p>Free</p>
            </div>
            <div class="column" id="premium">
              <p>Premium slots</p>
              <p>INR 134</p>
            </div>
            <div class="column" id="prime">
              <p>Prime slots</p>
              <p>INR 254</p>
            </div>
          </div>
        </div>
        <SubmitInput value="Sauvegarder et continuer" v-on:click="success='false'"/>
    </form>
    </div>
  </section>
</template>

<script>
import DateInput from './components/input/DateInput.vue';
import RadioInput from './components/input/RadioInput.vue';
import SubmitInput from './components/input/SubmitInput.vue';
import ErrorMessage from './components/message/ErrorMessage.vue';
export default {
  components:{
    DateInput,
    RadioInput,
    SubmitInput,
    ErrorMessage
  },
  data() {
    return {
      success: ''
    }
  }
}
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
#app {
  font-family: 'Poppins', sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
  margin-top: 60px;
  font-size: 1em;
}
img{
  max-width: 100%;
  display: inline-block;
  vertical-align: middle;
}
div.container{
  max-width: 1380px;
  margin: auto;
  padding: 0 20px;
}
form.contactForm{
  max-width: 600px;
  margin: auto;
  padding: 40px;
  box-shadow: 0 3px 5px 0 #adb5bd;
  border-radius: 5px;
}
form.contactForm > div{
  margin: 20px 0;
}
form.contactForm div.submit{
  margin-bottom: 0;
}
.label{
  font-size: 0.9em;
  color: #595959;
  display: block;
  margin-bottom: 8px;
}
input{
  min-height: 30px;
  border-radius: 5px;
  border: 1.5px solid #343a40;
  font-size: 1em;
  font-family: 'Poppins', sans-serif;
  padding: 10px;
}
input[type="date"], input[type="text"]{
  width: 100%;
}
input[type="submit"]{
  width: 100%;
  border: 0;
  background: #e85d04;
  color: #FFF;
  cursor: pointer;
}
span.hour{
  position: relative;
  display: inline-block;
  margin-right: 15px;
  margin-bottom: 15px;
}
span.hour label{
  padding: 10px;
  display: inline-block;
}
span.hour input{
  appearance: none;
  -webkit-appearance: none;
  margin: 0;
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
  top: 0;
  cursor: pointer;
}
span.hour input:focus{
  background: #343a40;
}
span.hour input.premium:focus{
  background: #2dc653;
}
span.hour input.prime:focus{
  background: #560bad;
}
span.hour input:focus + label{
  color: #FFF;
  z-index: 1;
  position: relative;
}
form.contactForm div.information{
  background: #D6F3FF;
  padding: 20px;
  border-radius: 5px;
  margin-bottom: 40px;
}
div.information .picture{
  width: 30px;
  margin-right: 15px;
}
div.information .picture, div.information .text{
  display: inline-block;
}
div.information .list{
  padding-left: 50px;
  display: flex;
  align-items: flex-start;
  flex-wrap: wrap;
}
div.information .list .column{
  margin-right: 40px;
  padding-left: 15px;
}
div.information .list .column p{
  margin: 3px 0;
}
div.information .list .column p:nth-of-type(1){
  position: relative;
}
div.information .list .column p:nth-of-type(2){
  font-size: 0.9em;
}
div.information .list #regular p:nth-of-type(1){
  color: #343a40;
}
div.information .list #premium p:nth-of-type(1){
  color: #2dc653;
}
div.information .list #prime p:nth-of-type(1){
  color: #560bad;
}
div.information .list #regular p:nth-of-type(1)::before{
  content:'';
  position: absolute;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  left: -15px;
  top: 7px;
  background: #343a40;
}
div.information .list #premium p:nth-of-type(1)::before{
  content:'';
  position: absolute;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  left: -15px;
  top: 7px;
  background: #2dc653;
}
div.information .list #prime p:nth-of-type(1)::before{
  content:'';
  position: absolute;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  left: -15px;
  top: 7px;
  background: #560bad;
}
form.contactForm div.error{
  background: #F5F5F5;
  padding: 20px;
  border-radius: 5px;
  margin-top: 40px;
}

</style>
