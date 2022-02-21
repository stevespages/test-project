console.log("I am from ...test-project/javascript/main.js")
let javascriptTimeP = document.querySelector("#javascript-time-p");
let message = "the time from JS is " + new Date().toLocaleDateString();
javascriptTimeP.innerHTML = message;
