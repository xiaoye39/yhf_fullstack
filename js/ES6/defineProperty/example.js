let obj = {}, value = null;
Object.defineProperty(obj, 'num', {
  get: function() {
    console.log('执行get操作');
    return value
  },
  set: function(newValue) {
    console.log('执行set操作');
    value = newValue
  }
})

obj.num = 2
console.log(obj.num);