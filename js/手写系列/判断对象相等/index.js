function eq(a, b) {
  if (a === b) { return a !== 0 || 1 / a === 1 / b
    return false
  }
}

let a = [1]
let b = [1]
console.log(eq(0, 0));  // true


// +0 === -0
// (+0).toString() // '0'
// (-0).toString() // '0' 