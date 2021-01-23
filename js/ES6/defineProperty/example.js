function Archiver() {
  let value = null;
  let archive = [];

  Object.defineProperty(obj, 'num', {
    get: function () {
      console.log('执行get操作');
      return value
    },
    set: function(newValue) {
      console.log('执行set操作');
      value = newValue
      archive.push({ val: newValue })
    }
  })

  this.getArchiver = function() {
    return archive
  }
}

let arc = new Archiver()
arc.num  // get
arc.num = 11 // get
arc.num = 22 // get
arc.getArchiver() //[{val: 11}, {val: 22}]
