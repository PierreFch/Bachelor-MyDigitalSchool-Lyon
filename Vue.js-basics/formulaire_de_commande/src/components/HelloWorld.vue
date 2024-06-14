<template>
 <h1>{{msg}}</h1>
</template>
 
<script>
export default {
 name: 'HelloWorld',
 props: {
 msg: String
 }
}
</script>
 
<style scoped>
h3 {
 margin: 40px 0 0;
}
ul {
 padding: 0;
}
li {
 margin: 0 10px;
}
a {
 color: #42b983;
}
</style>