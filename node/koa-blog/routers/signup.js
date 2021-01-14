const router = require('koa-router')();
const controller = require('../controller/c-signup')

router.post('/signup',async (ctx, next) => {
  await ctx.render('signup', {
    session: ctx.session
  })
})

// 点击注册按钮的响应事件
router.get('/signup', controller.postSignup)

module.exports = router