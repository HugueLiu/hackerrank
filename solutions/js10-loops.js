'use strict';

process.stdin.resume();
process.stdin.setEncoding('utf-8');

let inputString = '';
let currentLine = 0;

process.stdin.on('data', inputStdin => {
    inputString += inputStdin;
});

process.stdin.on('end', _ => {
    inputString = inputString.trim().split('\n').map(string => {
        return string.trim();
    });
    
    main();    
});

function readLine() {
    return inputString[currentLine++];
}

/*
 * Complete the vowelsAndConsonants function.
 * Print your output using 'console.log()'.
 */
function vowelsAndConsonants(s) {
    var str = String("aeiou");
    var t = String();
    for (var c in s) {
        var isin = false;
        for (var d in str) {
            if (s[c] == str[d]) {
                isin = true;
                console.log(s[c]);    
            }
        }
        if (!isin) {
            t = t + s[c];
        }
    }
    for (var c in t) {
        console.log(t[c]);
    }
}


function main() {
    const s = readLine();
    
    vowelsAndConsonants(s);
}