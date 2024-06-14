<template>
    <div class="submit">
        <input type="submit" v-bind:value="value">
    </div>
</template>

<script>
export default {
  name: 'SubmitInput',
  props: {
    value: String
  }
}
</script>

<style>

</style>
