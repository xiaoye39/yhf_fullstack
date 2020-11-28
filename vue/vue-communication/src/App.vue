<template>
  <div id="app">
    <!-- <img alt="Vue logo" src="./assets/logo.png">
    <Hello v-bind:message="title" :formHI="formHI" @sendData="getData"/>
    {{formChild}}

    <Hi @sendHI="getHI"/> -->
    <A/>
    <B/>
  </div>
</template>

<script>
// import Hello from '@/components/Hello.vue'
// import Hi from '@/components/Hi.vue'
import A from '@/components/A.vue'
import B from '@/components/B.vue'
export default {
  name: 'App',
  data () {
    return {
      title: '我爱我的祖国',
      formChild: '',
      formHI: ''
    }
  },
  components: {
    // Hello,
    // Hi,
    A,
    B
  },
  methods: {
    getData (e) {
      console.log(e);
      this.formChild = e
    },
    getHI (e) {
      this.formHI = e
    }
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
