// let a = 1
// let b = 2
// let c = 3

// let [a, [b, c]] = [1, [2, 3]]

// let [, , c] = [1, 2, 3]
// ...arguements

// let [a, b, ...c] = [1]

// let [a] = false

// console.log(a);

// set
// let arr = [1, 2, 3, 4, 5, 6, 3, 4]
// let newArr = new Set(arr)
// console.log(newArr);


// let [x, y, z] = {a: 'a', b: 'b', c: 'c'}
// console.log(x);

// let [x, y, z] = new Set(['a', 'b', 'c'])
// console.log(x);

// let [foo = true] = [false]
// console.log(foo);
// let [x, y = 'b'] = ['a', null]
// console.log(y);


// let {x, y, z} = {x: 'aaa', y: 'bbb'}
// console.log(z);


// let { log, sin, cos, abs } = Math
// console.log(abs(-2));

// const {log} = console
// log(123)


// let { foo: baz } = {foo: 'aaa', bar: 'bbb'}
// console.log(foo);

// let obj = {
//     p: ['hello', { y: 'world'}]
// }
// let { p: [x, { y }]} = obj

// console.log(x + y);


const [a, b, c, d, e] = 'hello'
console.log(c);