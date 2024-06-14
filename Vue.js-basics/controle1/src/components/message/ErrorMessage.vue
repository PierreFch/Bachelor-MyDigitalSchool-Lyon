<template>
    <div class="error">
        <p>Vous ne trouvez pas l'horaire qu'il vous faut ?</p>
        <p>
            <img src="./../../assets/check.png" alt="Check" title="">
            Vous avez été ajouté à la liste d'attente
        </p>
        <ResetInput value="Supprimer"/>
    </div>
</template>

<script>
import ResetInput from './../input/ResetInput.vue';
export default {
  name: 'ErrorMessage',
  props: {
    text: String
  },
  components:{
    ResetInput
  }
}
</script>

<style scoped>
.error p:nth-of-type(1){
    font-weight: 600;
}
.error p:nth-of-type(2){
    display: inline-block;
}
.error img{
    width: 30px;
    margin-right: 10px;
}
</style>
