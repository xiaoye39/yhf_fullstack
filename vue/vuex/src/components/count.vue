<template>
  <div class="count">
    <h3>{{ $store.state.count }}</h3>
    <h2>{{count}}</h2>
    <p>
      <button @click="add(10)">add</button>
      <button @click="$store.commit('reduce')">reduce</button>
    </p>
  </div>
</template>

<script>
import { mapState, mapMutations } from 'vuex'

export default {
  // computed: {
  //   newCount() {
  //     return this.$store.state.count * 2
  //   },
  // },
  data() {
    return {
      msg: ''
    }
  },
  // computed: mapState({
  //   newCount: state => state.count * 3
  // }),
  computed: mapState(['count']),
  methods: {
    test () {},
    ...mapMutations(['add', 'reduce'])
  }
};
</script>

<style>
</style>