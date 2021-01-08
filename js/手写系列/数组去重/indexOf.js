let array = [1, 2, 3, 1, '1', '1']

function unique(arr) {
  let res = []
  for (let i = 0; i < arr.length; i++) {
    let current = arr[i]
    if (res.indexOf(current) === -1) {
      res.push(current)
    }
  }
  return res
}

console.log(unique(array));