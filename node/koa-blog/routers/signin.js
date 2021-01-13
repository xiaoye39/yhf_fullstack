const router = require('koa-router')();

router.post('/signin', (ctx) => {
  // 展示登录页面
  ctx.body = 'signin'
})

module.exports = router