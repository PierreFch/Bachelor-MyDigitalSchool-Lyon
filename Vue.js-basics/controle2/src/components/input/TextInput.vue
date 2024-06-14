<template>
    <div class="input">
        <label v-bind:for="name">{{label}}</label>
        <input type="number" v-bind:name="name" v-bind:id="name" min="0" max="200" placeholder="min. 0cm / max. 200cm" />
    </div>  
</template>

<script>
export default {
  name: 'TextInput',
  props: {
    label: String,
    name: String,
    id: String
  }
}
</script>

<style scoped>
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input{
  -moz-appearance: textfield;
  min-width: 200px;
}

label{
    display: block;
    font-weight: 700;
    margin-bottom: 3px;
    font-size: 0.9em;
}

input{
    text-align: center;
    padding: 10px 20px;
    border: 1px solid #e4e4e4;
}

input::placeholder{
    font-style: italic;
    color: #707070;
}

.input{
    margin: 30px 0 20px 0;
}
</style>
