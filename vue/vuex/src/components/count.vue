<template>
  <div class="count">
    <h3>{{$store.state.count}}</h3>
    <p>
      <button @click="$store.commit('add')">add</button>
      <button @click="$store.commit('reduce')">reduce</button>
    </p>
  </div>
</template>

<script>
export default {

}
</script>

<style>

</style>