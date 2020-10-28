import Stack from './lib/Stack'; // es6 模块化引入
const stack = new Stack();
stack.push("第一条数据");
stack.push("第二条数据");
stack.pop();

console.log(stack.peek());
console.log(stack.size());
console.log(stack.isEmpty());
console.log(stack.toString());
console.log(stack.clear());

const decimalToBinary = function(decNumber:number) {
    let stack = new Stack(); // 入栈每个位
    let number = decNumber;
    let rem; // 余数
    let binaryString = "";
    while (number > 0) {
        rem = Math.floor(number % 2);
        stack.push(rem)
        number = Math.floor(number / 2);
    }
    while(!stack.isEmpty()) {
        binaryString += stack.pop().toString();
    }
    return binaryString
}
const testNumber = 999989993232287;
console.time("数据栈");
console.log(decimalToBinary(testNumber));
console.timeEnd("数据栈");

