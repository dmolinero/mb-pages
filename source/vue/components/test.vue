<style lang="sass">
  
  $red: green;

  .red {
    color: $red;
  }
</style>

<template>
  <h1 class="red">{{msg}}</h1>
</template>

<script>

let es6 = "Hello World"

export default {
  data () {
    return {
      msg: es6
    }
  }
}
</script>