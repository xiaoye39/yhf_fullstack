<<<<<<< HEAD
function test() {
    var arr = []
    for (var i = 0; i < 10; i++) {
        arr[i] = function() {
            console.log(i);
        }
    }
    return arr
}

var myArr = test()

for (var j = 0; j < 10; j++) {
    myArr[j]()
=======
function test() {
    var arr = []
    for (var i = 0; i < 10; i++) {
        arr[i] = function() {
            console.log(i);
        }
    }
    return arr
}

var myArr = test()

for (var j = 0; j < 10; j++) {
    myArr[j]()
>>>>>>> 8c2f71af13b65734be4da0e35ac4852cd248ed77
}