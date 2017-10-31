'use strict';

var arr = [3, 1, 2, 6, 9, 3, 6, 4, 5],
    sum = 0;

for (i = 0; i < arr.length; i++) {
    sum += arr[i];

    if (sum > 10) {
        console.log(i + 1); // alert(i + 1);
        break;
    }
}

