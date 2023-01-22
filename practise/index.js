//Weather App

// let weather = prompt('How is the weather')

// if (weather == 'rain') {
//     console.log('Wear an umbrella!')
// }

// else{
//     console.log('Grab your sunglasses!')
// }


//Weather App

// function greeting(name) {
//     greet = `hi ${name}, nice to meet you`
//     console.log(greet)
// }

// greeting('Muhammed')

// function sum(a, b){
//     return a + b
// }

// num1 = sum(1, 2)

// console.log(num1)

// function calcTip(food, tip){
//     const tipPerc = tip/100
//     const tipAmount = food * tipPerc
//     const total = food + tipAmount
//     return total
// }

// console.log(calcTip(100, 20))

// const sumArrow = (a, b) => {
//     return a + b
// }

    // const groceries = ['banana', 'orange', 'apple', 'kiwi']
    // console.log(groceries.length)


// const person = {
// name: 'Muhammed', 
// shirt: 'Black'
// }    

// console.log(person['shirt'])

// person.phone = '12344567'

// console.log(person.phone)

// const person2 = {
//     name: 'Qazi',
//     shirt: 'Black',
//     Glasses: 'Grey',
//     Job: 'Developer',
//     Laptop: 'Macbook Pro',
// }

// console.log(person2.Laptop)

// const introduction = (shirt, name) => {
//     const person ={
//         name: name,
//         shirt: shirt,
//         assets: 60000,
//         debt: 1000,
//         netWorth: function() {
//                 return this.assets - this.debt
//         }
//     }
//     const intro =  `Hi, my name is ${person.name} and the color of my shirt is ${person.shirt}.
//     And my networth is ${person.netWorth()}`

// return intro
// }

// console.log(introduction('white', 'Leonardo'))

// let prophets = ['Muhammed', 'Isa', 'Musa', 'Ibrahim', 'Nuh']

// for(let i=0; i< prophets.length; i++){
//    console.log( prophets[i])
// }

// for (let prophet of prophets) {
//     console.log(prophet)
// }



// const double = (numbers) => {
//     let result = []
//     for (const number of numbers){
//         result.push(number * 2)
//     }
//     return result
// }

// console.log(double(['1', '2', '3']))



// const numbers = ['1', '2', '3', '4']

// for (let number of numbers){
//     result.push(number ** 2)
// }

// console.log(result)

// let result = 0


// const letterCounter = (phrase) => {


//     for (const index in phrase) {
//         console.log(Number(index) + 1)
//         result = Number(index) + 1
//     }

//     return {result}
// }

// result = 0;
// result = 1;
// result = 3;
// result = 6;
// result = 10;

// const phrase = prompt('write ur phrase')
// console.log(letterCounter(phrase))


//  const sumArray = (numbers) =>{
//     let result = 0;

//     for(let number of numbers){
//         console.log(number)
//         result = result + number
//     }
//     return {result}
//  }

//  const nums = [1,2,3,4]
//  console.log(sumArray(nums))

// const sumArray = (numbers) => {
//     let result = 0;

//     for(let number of numbers){
//         console.log(number)
//         result = result + number
//     }

//     return result
// }

// const max = ( numbers ) => {
//     let result = numbers [0]

//     for(const number of numbers){
//         if (number > result) {
//             result = number
//         }
//     }

//     return result
// }

// ahmed = [1,2,3,4,5,6,1,7]
// console.log(max(ahmed))

// const frequency = (phrase) =>{
//     console.log(phrase)
//     let freq = {}
//     for (const letter of phrase) {
        
//         if (letter in freq){
//             freq[letter]+= 1
//         }
//         else freq[letter] = 1
//     }
//     return freq
// }

// console.log(frequency('hallo'))

// const wordFrequency = (phrase) =>{
//     let freq = {}
//     words = phrase.split(' ')
//     for(const word of words){
//         console.log(word)
//         if (word in freq){
//             freq.word++
//         }
//         else (freq.word = 1)
//     }
//     return freq
// }

// console.log(wordFrequency('la la la gasd asdsads  asd'))

// const doubleMap = (numbers) => {
//     return numbers.map(number => number * 2)
// }
//  console.log(doubleMap([1,2,3,4,5,6]))


// const filter = (numbers, greaterThan) => {
//     let result = []
//     for (const number of numbers) {
//         if(number > greaterThan)
//         {
//             result.push(number)
//         }
//     }
//     return result
// }

// console.log(filter([1,2,3,4,5], 3))
 
// const nums = [1,2,3,4,5,6]
// console.log(nums.filter(num => num >= 3))

// const actors = [
//     {name: 'Johnny', netWorth: 1000},
//     {name: 'Johnny2', netWorth: 2000},
//     {name: 'Johnny3', netWorth: 3000},
// ]

// console.log(actors.filter(actor => actor.netWorth >1000))

// document.getElementById("html").innerHTML;




