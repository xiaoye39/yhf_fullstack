function sortedIndex(array, obj) {
  let low = 0, high = array.length;

  while (low < high) {
    let mid = Math.floor((low + high) / 2)
    if (array[mid] < obj) low = mid + 1
    else high = mid
  }

  return high
}


console.log(sortedIndex([10, 20, 30], 25));
// sortedIndex([10, 20, 30], 25) // 2
