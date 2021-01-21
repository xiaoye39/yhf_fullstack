function a() {
  setTimeout(() => {
    console.log('aaaa');
  }, 1000)
}

function b() {
  setTimeout(() => {
    console.log('bbbb');
  })
}

a()
b()