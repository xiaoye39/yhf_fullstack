<template>
  <div class="count">
    <h3>{{$store.state.count}}</h3>
    <p>
      <button @click="$store.mutation">add</button>
      <button>reduce</button>
    </p>
  </div>
</template>

<script>
export default {

}
</script>

<style>

</style>