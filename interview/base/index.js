// let key1 = 1
// let key2 === 1
// console.log(key1 = key2);

// let obj = {
//     name = "wn"
// }
// const a = []   // #001
// const b = a
// b.push(1)  // b = [1]
// console.log(a);


// function test(person) {
//     person.age = 26
//     person = {
//         name: 'yyy',
//         age: '30'
//     }
//     return person
// }
// const p1 = {
//     name: 'xxx',
//     age: 25
// }
// const p2 = test(p1)
// console.log(p1);
// console.log(p2);

// 1. 函数传参是传递对象指针的副本
// 2. p1 和 person 具有相同的指针，person被修改，哦也会被修改
// 3. person拥有了一个新的内存地址

// console.log('hello' instanceof String);

// 让 instanceof 也能判断原始类型 

class PrimitiveString {
    static [Symbol.hasInstance] (x) {   //Symbol.hasInstance让我们自定义instanceof的行为
        return typeof x === 'string'
    }
}

console.log('hello' instanceof PrimitiveString);