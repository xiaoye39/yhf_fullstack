<template>
  <!-- <div class="home">
    <Form></Form>
  </div> -->
  <div class="page">
    <p>
      <router-link to="/">首页</router-link> |
      <router-link to="/about">关于</router-link>
    </p>

    <!-- 路由入口 -->
    <transition name="fade">
      <router-view></router-view>
    </transition>
  </div>
</template>

<script>
// import Form from './components/form'
export default {
  data() {
    return {};
  },
  // components: {
  //   Form
  // },
};
</script>

<style>
.fade-enter{
  opacity: 0;
}
.fade-leave{
  opacity: 1;
}
.fade-enter-active{
  transition: opacity 0.5s;
}
.fade-leave-active{
  opacity: 0;
  /* transition: opacity 0.5s; */

}
.page{
    text-align: center;
}
p{
    text-align: center;
}
</style>