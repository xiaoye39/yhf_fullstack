// 电脑随机生成3个
module.exports = function (playerAction){
    var random = Math.random() * 3
if(random < 1) {
    var computerAction = 'rock'
} else if (random > 2) {
    var computerAction = 'scissor'
} else {
    var computerAction = 'paper'
}

// 进行计较
if(computerAction === playerAction){
    console.log('平局');
    return 0
} else if((computerAction === 'rock' && playerAction === 'paper') || (computerAction === 'scissor' && playerAction === 'rock') || (computerAction === 'paper' && playerAction === 'scissor')){
    console.log('你赢了');
    return -1
} else {
    console.log('你输了');
    return 1
}
    
}

