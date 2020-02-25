var myArr = [1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 3, 3, 4, 4];

myArr.forEach((val, index) => {

    if (val == myArr[index + 1]) {

        myArr[index] = 0;

    }

});

var myArr = myArr.filter(num => num != 0);

console.log(myArr);
console.log(myArr.length);