// let arr = [{old: 'old'}, 1, true, null, undefined]
// let new_arr = arr.concat()
// arr[0].old = 'new'
// console.log(arr);
// console.log(new_arr);


// let arr = ['old', 1, true, null, undefined]
// let new_arr = arr.slice()
// arr.[0].old = 'new'

// console.log(new_arr); 

let arr = [{ old: 'old' }, 1, true, null, undefined]
let new_arr = JSON.parse(JSON.stringify(arr))
arr[0].old = 'new'
console.log(new_arr);  