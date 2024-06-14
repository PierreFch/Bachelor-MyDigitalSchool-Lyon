<template>
    <div class="date">
        <label v-bind:for="name" class="label">{{label}}</label>
        <input type="date" v-bind:name="name" v-bind:id="name">
    </div>
</template>

<script>
export default {
  name: 'DateInput',
  props: {
    label: String,
    name: String
  }
}
</script>

<style>

</style>
