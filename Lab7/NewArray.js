let arr = [];
let size  = prompt("Enter the size of array");
for(let i = 1; i <= size; i++)
	 {
		 arr.push(parseInt(Math.random()*100));
	 }
console.log("Size of array:", size);
console.log(arr);
let min = MinElement(arr);
let max = MaxElement(arr);
console.log('min', min);
console.log('max', max);
let NewArr = SwapMinMax(arr, min, max);
console.log('Swap MIN and MAX: ', NewArr);
let SortedArray = InsertionSort(NewArr);
console.log('Insertion Sort: ', SortedArray );
function SwapMinMax(arr, min, max)
{
    var indexOfMin = arr.indexOf(min);
    var indexOfMax = arr.indexOf(max);
    let temp = arr[indexOfMin];
    arr[indexOfMin]= arr[indexOfMax];
    arr[indexOfMax]= temp;
    return arr;
}
function MinElement(arr) {
    let minArr=[];
    var k = 0;
    for(var i = 1; i< size; i++)
    {
       if(i%2!=0)
       {
        minArr[k] = arr[i];
        k++;
       }
    }
    let min = Math.min.apply(Math, minArr);
    return min;
}
function MaxElement(arr) {
    let maxArr=[];
    var k = 0;
    for(var i = 0; i<= size; i++)
    {
       if(arr[i]%2==0)
       {
        maxArr[k] = arr[i];
        k++;
       }
    }
    let max = Math.max.apply(Math, maxArr);
    return max;
}
function InsertionSort(array)
{
    for (var i = 1; i < size; ++i)
    {
        var key = array[i];
        var j = i;
        while ((j >= 1) && (array[j - 1] >= key))
        {
            var temp = array[j - 1];
            array[j - 1] = array[j];
            array[j] = temp;
            j--;
        }
        array[j] = key;
    }
    return array;
}