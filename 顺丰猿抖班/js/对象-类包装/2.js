function myPerson(name, age) {
    var
    this.name = name
    this.age = age
}

function Car(color) {
    this.color = color
    this.name = 'BMW'
    return {}
}
var car = new Car('red')
console.log(car);