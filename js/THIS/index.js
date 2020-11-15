// function identify() {
//     return this.name.toUpperCase()
// }

// function speak(context) {
//     var greeting = "Hello I am" + identify.call(this)
//     console.log(greeting);
// }

// var me = {
//     name: 'wn'
// }

// var you = {
//     name: 'yangbao'
// }
// speak.call(me)


// function foo() {
//     let person = {
//         name: 'wn',
//         age: 18
//     }
//     console.log(this); //指向window
// }

// function bar() {
//     let person = {
//         name: '蜗牛',
//         age: 20
//     }
//     foo()
// }
// bar()

// function foo() {
//     console.log(this.a);
// }
// var a = 2

// (function() {
//     'use strict'
//     f00()  //严格模式下，foo的调用，与位置无关
// })()


function foo() {
    console.log(this.a);
}
var obj2 = {
    a : 3,
    foo: foo //function foo(){console.log(this.a)}
}
var obj1 = {
    a : 2,
    obj2: obj2
}

// obj2.foo()  // 3
obj1.obj2.foo()  //3

//隐式丢失
function foo() {
    console.log(thtis.a);
}

var obj = {
    a : 3,
    foo: foo
}
var obj = obj.foo
var a = 'hello world'

bar()