块级：
- 独占一行
- 能设置宽高
(BFC)：块级格式上下文

行内：
- 水平方向都在一行上面
- 垂直方向: 以当前行的 base-line 对齐
- 不能设置宽高  （错误）
- 非置换元素不能设置宽高  
- 行内置换元素是能设置宽高

img -> 行内 -> 设置宽高

置换元素：
内部内容不受 css 控制
```html
<img src="" />  src决定
<canvas />  300*xxx
<input />
<iframe src="" />  300*xxx
<script src="" />
```
非置换元素:
```html
<div>
    <div></div>
</div>
<span>文字</span> 
```

词法(静态)作业域: js c c++
动态作业域: bash
