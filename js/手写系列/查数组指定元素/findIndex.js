function isBigEnough(element) {
  return element >= 15
}
console.log([12, 1, 5, 8, 123, 44].findIndex(isBigEnough));

// 实现
function findIndex(array, predicate, context) {
  for (let i = 0; i < array.length; i++) {
    predicate(array[i], i, array)
  }
}
console.log(findIndex([1, 2, 3, 4], function(item, i, array) {
  if (item == 3) return true
}));  // 2