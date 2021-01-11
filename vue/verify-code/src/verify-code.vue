<template>
  <div class="vcWrap">
    <input v-for="n in len" :key="'codeInput' + n">
  </div>
</template>

<script>
export default {
  props: ['length'],
  data () {
    return {
      len: this.length || 4, // 验证码长度
    }
  }
}
</script>

<style>

</style>