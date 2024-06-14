<template>
    <div class="reset">
        <input type="reset" v-bind:value="value">
    </div>
</template>

<script>
export default {
  name: 'ResetInput',
  props: {
    value: String
  }
}
</script>

<style scoped>
input{
    color: #d00000;
    background: none;
    border: 0;
    cursor: pointer;
}
div{
    display: inline-block;
    padding-left: 5px;
}
</style>
