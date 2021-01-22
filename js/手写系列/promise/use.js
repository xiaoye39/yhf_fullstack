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


a().then(() => {
  b()
})




/*
function abc() {

}
====>
let abc = () => {

}
*/