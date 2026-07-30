const displayInput = document.querySelector('#display');

let calcBtn = (calcBtnValue) => {

    if (displayInput.value === "0") {
        displayInput.value = calcBtnValue;
    } else {
        displayInput.value += calcBtnValue;
    }

}

let calcAction = (calActionParameter) => {
    if (calActionParameter === "clear") {
        displayInput.value = 0;
    }
    if (calActionParameter === "del") {
        let result = displayInput.value.slice(0, -1);
        displayInput.value = result;
    }
}

let calcOperators = (operator) => {

    let lastChar = displayInput.value.slice(-1);

    let operators = ["+", "-", "*", "/", "%"];

    if (!operators.includes(lastChar)) {
        displayInput.value += operator;
    }

}

let decimalBtn = (decimalBtnPara) => {
    if (!displayInput.value.includes(".")) {
        displayInput.value = `${displayInput.value}.`;
    }
}

let finalCalEqual = () => {

    let expression = displayInput.value;

    // Expression ko array me convert karo
    let tokens = expression.match(/(\d+(\.\d+)?|[+\-*/])/g);

    if (!tokens) {
        displayInput.value = "Error";
        return;
    }

    // Sabhi numbers ko Number type me convert karo
    for (let i = 0; i < tokens.length; i++) {

        if (!isNaN(tokens[i])) {
            tokens[i] = Number(tokens[i]);
        }

    }

    // Step 1 : Multiplication & Division
    for (let i = 0; i < tokens.length; i++) {

        if (tokens[i] === "*") {

            let result = tokens[i - 1] * tokens[i + 1];

            tokens.splice(i - 1, 3, result);

            i--;

        }

        else if (tokens[i] === "/") {

            if (tokens[i + 1] === 0) {

                displayInput.value = "Cannot Divide by Zero";
                return;

            }

            let result = tokens[i - 1] / tokens[i + 1];

            tokens.splice(i - 1, 3, result);

            i--;

        }

    }

    // Step 2 : Addition & Subtraction
    let answer = tokens[0];

    for (let i = 1; i < tokens.length; i += 2) {

        let operator = tokens[i];
        let number = tokens[i + 1];

        if (operator === "+") {

            answer += number;

        }

        else if (operator === "-") {

            answer -= number;

        }

    }

    displayInput.value = answer;

}
