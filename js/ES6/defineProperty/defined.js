let obj = {}
Object.defineProperty(obj, 'num', {
  value: 1,
  writable: false,
  enumerable: true,
  configurable: false,
  // getter
  get: undefined,
  // setter
  set: undefined
})
// obj.num = 1
// for (let key in obj) {
//   console.log(key);
// }

for (let key in obj) {
  console.log(key);
}
