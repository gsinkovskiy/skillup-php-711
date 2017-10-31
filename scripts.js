'use strict';

function arrayFill(s, count) {
    var i,
        res = '';

    for (i = 0; i < count; i++) {
        res += s;
    }

    return res;
}

var i,
    arr = [],
    tmp;

for (i = 1; i <= 9; i++) {
    tmp = arrayFill(i, i);
    arr.push(tmp);
}

console.log(arr);
