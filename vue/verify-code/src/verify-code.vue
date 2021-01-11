<template>
  <div class="vcWrap">
    <input
      v-for="n in len"
      :key="'codeInput' + n"
      v-model.trim.number="code[n - 1]"
      @keydown="onkeydown(n)"
      @keyup="onkeyup(n)"
    />
  </div>
</template>

<script>
export default {
  props: ["length"],
  data() {
    return {
      len: this.length || 4, // 验证码长度
      code: new Array(this.len),
      keyCode: [
        48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 8, 13
      ]
    };
  },
  methods: {
    onkeydown(n) {
      console.log(n);
      console.log(event);
    }
  }
};
</script>

<style>
  .vcWrap input{
    width: 40px;
    height: 40px;
    line-height: 40px;
    -webkit-appearance: none;
    background-color: #f7f9fa;
    border: 1px solid #f7f9fa;
    box-sizing: border-box;
    display: inline-block;
    font-size: inherit;
    outline: 0;
    padding: 0 14px;
    transition: border-color 0.2 cubic-bezier(0.645, 0.045, 0.355, 1);
    border-radius: 4px;
    margin-right: 1em;
  }
  .vcWrap input:last-child{
    margin-right: 0;
  }
</style>