var name = 'Word!'

(function() {
  if (typeof name === 'undefined') {
    var name = 'Jack'
    console.log('Goodbye' + name);
  } else {
    console.log('Hello' + name);
  }
})()

// 变量提升js将声明移动至作用域的顶部