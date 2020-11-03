/*
function foo() {
    console.log(this.a);
}
var bar = {
    a: 2
}
foo.call(bar)
*/
var a = {
    user: '蜗牛',
    fn: function(q, w) {
        console.log(this.user);
        console.log(q + w);
    }
}
var b = a.fn
var c = b.bind(a, 3, 4)
c(2, 3)
// b.call(a, 2, 3)
// b.apply(a, [2, 3])
