// 什么是浅拷贝？如何实现一个浅拷贝？什么是深拷贝？如何实现一个深拷贝？

// let a = {
//     age: 1,
//     info: {
//         name: 'wn'
//     }
// }

// let b = JSON.parse(JSON.stringify(a))
// a = {
//     age: 2
// }
// let b = Object.assign({}, a)
// a.age = 2
// a.info.name = '蜗牛'
// console.log(b.info.name);  // 2 


// let c = {
//     age: 1,
//     jobs: {
//         first: 'coding'
//     }
// }
// let d = {...c}
// c.jobs.first = 'waiter'
// console.log(d.jobs.first);



// let c = {
//     age: 1,
//     jobs: {
//         first: 'coding'
//     }
// }
// let d = JSON.parse(JSON.stringify(c))
// c.jobs.first = 'waiter'
// console.log(d.jobs.first);


// let obj = {
//     a: 1,
//     b: {
//         c: 2,
//         d: 3
//     }
// }
// obj.c = obj.b
// obj.e = obj.a
// obj.b.c = obj.c
// obj.b.d = obj.b
// obj.b.e = obj.b.c

// let newObj = JSON.parse(JSON.stringify(obj))
// console.log(newObj);

let test = {
    age: undefined,
    sex: Symbol('man'),
    jobs: function() {},
    name: 'wn'
}
let o = JSON.parse(JSON.stringify(test))
console.log(o);