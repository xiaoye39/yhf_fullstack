let Vue = null
class VueRouter {
  constructor (options) {
    this.mode = options.mode || 'hash'
    this.routes = options.routes
  }
}
VueRouter.install = function() {
  Vue = v 
  Vue.component('router-link', {
    render(h) {
      return h('a', {}, '首页')
    }
  })
  Vue.component('router-view', {
    render(h) {
      return h('h1', {}, '首页视图')
    }  
  })
}

export default VueRouter



// class Vue {
//   constructor() {
//     _installedPlugins: ''
//   }
// }
// Vue.use = function(plugin) {
//   const installedPlugins = (this._installedPlugins || (this._installedPlugins = []))
//   if (installedPlugins.indexOf(plugin) > -1) {
//     return this
//   }
//   const args = toArray(arguments, 1)
//   args.unshift(this)
//   if (typeof plugin.install === 'function') {
//     plugin.install.apply(plugin, args)
//   } else if (typeof plugin === 'function') {
//     plugin.apply(null, plugin, args)
//   }
//   installedPlugins.push(plugin)
//   return this
// }