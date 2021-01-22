const PENDING = 'pending'
const RESLOVED = 'resolved'
const REJECTED = 'rejected'


function MyPromise(fn) {
  const that = this
  that.state = PENDING
  that.value = null
  that.resolvedCallbacks = []
  that.rejectedCallbacks = []

  try {
    fn(reslove, reject)
  } catch (error) {
    reject(error)
  }
}


function reslove(value) {
  if (that.state === PENDING) {
    that.state === RESLOVED
    that.value = value
    that.resolvedCallbacks.map(cb => {
      cb(that.value)
    })
  }
}

function reject() {
  if (that.state === PENDING) {
    that.state === REJECTED
  }
}