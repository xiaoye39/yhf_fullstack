// let arr = []
// arr instanceof Array

function instance_of(L, R) {  // []
    L = L.__proto__ // Array.prototype
    let O = R.prototype

    while (true) {
        if (0 === L) return true
        if (O === L) return true
        L = L.__proto__   // Array.prototype.__proto__ == Object.prototype

}

console.log(instance_of(arr, Array));
