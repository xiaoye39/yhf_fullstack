<template>
  <div class="hello">
    {{message}}
    <hr/>
    {{formHI}}
    <button @click="send">发送</button>
  </div>
</template>

<script>
export default {
  props: ['message', 'formHI'],
  data () {
    return {
      msg: '我是子组件里面的数据'
    }
  },
  methods: {
    send () {
      this.$emit('sendDate', this.msg)
    }
  }
}
</script>

<style>
.hello{
  color: red;
  font-size: 20px;
  /* width: 100px;
  height: 50px;
  border: 2px dotted blue; */
  margin: 0 auto;
}
</style>