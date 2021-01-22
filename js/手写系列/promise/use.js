function a() {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      console.log('aaaa');
      resolve()
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