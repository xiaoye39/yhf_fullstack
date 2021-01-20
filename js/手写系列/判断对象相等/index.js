// function eq(a, b) {
//   if (a === b) return a !== 0 || 1 / a === 1 / b
//     return false
// }

// let a = [1]
// let b = [1]
// console.log(eq(0, 0));  // true
// console.log(eq(0, -0));  // false


// +0 === -0
// (+0).toString() // '0'
// (-0).toString() // '0' 


function eq(a, b) {
  // +0,-0
  if (a === b) return a !== 0 || 1 / a === 1 / b
  // NaN
  if (a !== a) return b !== b
  // null
  if (a == null || b == null) return false
  // 
  if (+a !== +a) return +b !== +b
 
  let type = typeof(a)
  if (type !== 'function' && type !== 'object' && typeof(b) !== 'object') return false

  // 更复杂的对象
  return deepEq(a, b)
}

// console.log(NaN, NaN); // true
// let toString = Object.prototype.toString
// toString.call('wn')
// toString.call(new String('wn'))
// console.log('wn' + '' === new String('wn') + '');
let toString = Object.prototype.toString
function isFunction(obj) {
  return toString.call(obj) === '[object Function]'
}
function deepEq(a, b) {
  let className = toString.call(a)
  if (className !== toString.call(b)) return false

  switch (className) {
    case '[object RegExp]':
    case '[object String]':
      return '' + a === '' + b
    case '[object Number]':
      if (+a !== +a) return +b !== +b
      return +a === 0 ? 1 / b : +a === +b
    case '[object Date]':
    case '[object Number]':
      return +a === +b
  }
 
  let areArrays = className === '[object Array]'
  if (!areArrays) {
    if (typeof a !== 'object' || typeof b !== 'object') return false

    let aCtor = a.__proto__.constructor, bCtor = b.__proto__.constructor
    // aCtor 和 bCtor
    if (aCtor !== bCtor && !(isFunction(aCtor) && aCtor instanceof aCtor && isFunction(bCtor) && bCtor instanceof bCtor) && ('constructor' in a && 'constructor' in b)) {
      return false
    }
  }
}
  

function Person(name) {
  this.name = name
}
function Animal(name) {
  this.name = name
}
let person = new Person('Tom')
let animal = new Animal('Tom')

console.log(eq(person, animal));


let attrs = Object.create(null)
attrs.name = 'Jerry'

console.log(eq(attrs, {name: 'Jerry'}));