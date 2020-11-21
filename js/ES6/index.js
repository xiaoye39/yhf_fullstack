// var foo = 'bar'
// console.log(foo);
// let foo = 'bar'

// const foo = 'bar'
// foo = 123
// console.log(foo);  // 错误

// let example = 'Tom'
// const foo = 'this is' + example
// const foo = `this is ${example}`


// es6 新增数组方法
// let arr = ['a', 'b', 'c']
// console.log(Object.keys(arr));
// let newArr = [...arr.keys()]
// console.log(newArr);


// let iter = arr.entries()
// for (let e of iter) {
//     console.log(e);
// }


// console.log(iter);

// let eArr = arr.values()
// for (let e of eArr) {
//     console.log(e);
// }


// function test(fruit) {
//     if (fruit == 'apple' || fruit == 'strawberry') {
//         console.log('red');
//     }
// }


// function test(fruit) {
//     const redFruits = ['apple', 'strawberry', 'cherry']
//     if (redFruits.includes(fruit)) {
//         console.log('red');
//     }
// }
// test('cherry')


// let people = [
//     { name: '小陶', age: 20 },
//     { name: '叶总', age: 18 },
//     { name: '大陶', age: 21 },
// ]
// function findFriend(person) {
//     return person.name === '叶总'
// }
// console.log(people.find(findFriend));


let test = ['a', 'b', 'c', 'd']
function index(i) {
    return i == 'b'
}
console.log(test.findIndex(index));