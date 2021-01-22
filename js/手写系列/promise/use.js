function a() {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      console.log('aaaa');
      reject('err')
    }, 1000)
  })
}

function b() {
  setTimeout(() => {
    console.log('bbbb');
  })
}


a().catch(b)