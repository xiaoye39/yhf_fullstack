function add(a, b) {
  return a + b
}

add(1, 2) 

let addCurry = curry(add)
addCurry(1)(2)  // 3




function ajax() {
  
}