function a() {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      console.log('aaaa');
      resolve('ok')
    }, 1000);
  })
}

function b() {
  setTimeout(() => {
    console.log('bbbb');
  }, 500);
}

function c() {
  setTimeout(() => {
    console.log('cccc');
  }, 100);
}

a().then((res) => {
  console.log(res);
  b()
  return 'okk'
}).then((res) => {
  console.log(res);
  c()
})