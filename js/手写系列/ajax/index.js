let xhr = new XMLHttpRequest()
// 初始化
xhr.open(method, url, async)
// 发送请求
xhr.send(data)
// 设置状态变化回调处理请求结果
xhr.onreadystatechange = () => {
  if (xhr.readyState === 4 && xhr.status === 200) {
    // 0 － （未初始化）还没有调用send()方法
    // 1 － （载入）已调用send()方法，正在发送请求
    // 2 － （载入完成）send()方法执行完成，已经接收到全部响应内容
    // 3 － （交互）正在解析响应内容
    // 4 － （完成）响应内容解析完成，可以在客户端调用了
    console.log(xhr.responseText);
  }
}

// 基于promise 实现 ajax
function ajax(options) {
  const url = options.url
  const method = options.method.toLowerCase() || 'get'
  const async = options.async
  const data = options.data

  const xhr = new XMLHttpRequest()

} 



ajax({
  method: 'GET',
  url: '',
  async: true,
  data: {},
  
})