function a() {
  return new Promise((test, reject) => {
    setTimeout(() => {
      console.log('aaaa');
      reject()
    }, 1000)
  })
}

function b() {
  setTimeout(() => {
    console.log('bbbb');
  })
}


a().then((res) => {
  console.log(res);
  b()
}).then((res) => {
  console.log(res);
})




/*
function abc() {

}
====>
let abc = () => {

}
*/