// indexOf
// console.log([1, 2, 3, 4].indexOf(3)); // 2
// console.log([1, 2, 3, 4].lastIndexOf(2)); // 1


function findLastIndex(array, predicate, context) {

}

console.log(findLastIndex([1, 2, 3, 4], function(item, index, array) {
  if (item == 1) return true
}));  // 0