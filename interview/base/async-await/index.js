// async/await的原理是什么？把下面这段代码翻译成promise
function getJson() {
  return new Promise((resolve, reject) => {
    setTimeout(function() {
      console.log(2);
      resolve(9999)
    }, 2000)
  })
}
// async function testAsync() {
//   let data = await getJson()
//   console.log(3);
//   console.log(data);
// }
function testAsync() {
  return Promise.resolve().then(() => {
    return getJson()
  }).then((res) => {
    let data = res
    console.log(3);
    console.log(data);
  })
}

testAsync()