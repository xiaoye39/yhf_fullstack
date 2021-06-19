let foo = {
    value: 1,
    getValue: () => {   // 箭头函数没有this
        console.log(this.value);  //this指向window
    }
}

foo.getValue()


function Foo() {
    this.value = 1
}

Foo.prototype.getValue = () => console.log(this.value);

let foo = new Foo()

foo.getValue()