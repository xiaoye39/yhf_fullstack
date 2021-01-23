// 能独立监听某个数据的变化
// 提供可执行函数的场所

class watcher {
  constructor (opts) {
    this.$data = opts.data
    for (let key in opts.data) {
      this.setData(key)
    }
  }

  getBaseType(target) {
    const typeStr = Object.prototype.toString.call(target) // "[object object]"
    typeStr.slice()
  }

  setData(_key) {
    // this.$data
    Object.defineProperty(this, _key, {
      get: function() {
        return this.$data[_key]
      },
      set: function(newVal) {
        const oldVal = this.$data[_key]
        if (newVal === oldVal) return newVal
        this.$data[_key] = newVal
        // 调用opts里面的watch里面的函数
        this.$data[_key] && this.getBaseType(this.$watch[_key]) === 'Function'
      }
    })
  }
}


let vm = new watcher({
  data: {
    a: 0,
    b: 'hello'
  },
  watch: {
    a (newVal, oldVal) {
      console.log(newVal, oldVal);
    }
  }
})

vm.a = 1