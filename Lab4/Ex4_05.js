const num = prompt('Введіть розмір масиву: ')

const array =[]
for(let index = 0; index < num; index++){
    array[index] = getRandomBetween(-50, 50)
}

console.log('Початковий масив:')
console.log(array)

function getRandomBetween(min, max){
    return Math.floor(Math.random()* (max-min+1) + min)
}

const selectionSort = arr => {
    for (let i = 0, l = arr.length, k = l - 1; i < k; i++) {
        let indexMin = i;
        for (let j = i + 1; j < l; j++) {
            if (arr[indexMin] > arr[j]) {
                indexMin = j;
            }
        }
        if (indexMin !== i) {
            [arr[i], arr[indexMin]] = [arr[indexMin], arr[i]];
        }
    }
    return arr;
};

console.log('Відсортований масив:')
console.log(selectionSort(array))


