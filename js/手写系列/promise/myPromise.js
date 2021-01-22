const PENDING = 'pending'
const RESLOVED = 'resolved'
const REJECTED = 'rejected'


function MyPromise(fn) {
  const that = this
  that.state = PENDING
  that.value = null
  that.resolvedCallbacks = []
  that.rejectedCallbacks = []

  function reslove(value) {
    if (that.state === PENDING) {
      that.state === RESLOVED
      that.value = value
      that.resolvedCallbacks.map(cb => {
        cb(that.value)
      })
    }
  }

  function reject(value) {
    if (that.state === PENDING) {
      that.state === REJECTED
      that.value = value
      that.resolvedCallbacks.map(cb => {
        cb(that.value)
      })
    }
  }

  try {
    fn(reslove, reject)
  } catch (error) {
    reject(error)
  }
}





MyPromise.prototype.then = function (onFulfilled, onRejected) {
  const that = this
  onFulfilled = typeof onFulfilled === 'function' ? onFulfilled : v => v
  onRejected = typeof onRejected === 'function' ? onRejected : r => { throw r }

  if (that.state === PENDING) {
    that.resolvedCallbacks.push(onFulfilled)
    that.rejectedCallbacks.push(onRejected)
  }

  if (that.state === RESLOVED) {
    onFulfilled(that.value)
  }
}




function a() {
  return new MyPromise((test, reject) => {
    setTimeout(() => {
      console.log('aaaa');
      test('ok')
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