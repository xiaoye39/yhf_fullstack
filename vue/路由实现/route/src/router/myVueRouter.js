let Vue = null
class HistoryRoute {
  constructor () {
    this.current = null
  }
}
class VueRouter {
  constructor (options) {
    this.mode = options.mode || 'hash'
    this.routes = options.routes || []
    this.routesMap = this.createMap(this.routes)

    this.history = new HistoryRoute()
  }
  createMap(routes) {
    return routes.reduce((pre, current) => {
      pre[current.path] = current.component  // { './home': Home }
      return pre
    }, {})
  }
}
VueRouter.install = function() {
  Vue = v 
  Vue.mixin({
    beforeCreate() {
      if (this.$options && this.$options.router) { // 如果是根组件
        this._root = this
        this._router = this.$options.router
      } else {  // 如果是子组件
        this._root = this.$parent && this.$parent._root
      }
      Object.defineProperty(this, '$router', {
        get () {
          return this._root._router
        }
      })
    }
  })
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