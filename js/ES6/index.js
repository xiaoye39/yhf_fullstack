var foo = 'bar'
console.log(foo);
let foo = 'bar'

const foo = 'bar'
foo = 123
console.log(foo);  // 错误

let example = 'Tom'
const foo = 'this is' + example
const foo = `this is ${example}`