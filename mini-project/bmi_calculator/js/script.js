let calculateBmiBtn = () => {
    const calculateBtn = document.querySelector('.calculateBtn');

    let weight = document.querySelector('#weight').value;

    let height = document.querySelector('#height').value;

    let heightInMeter = height * 0.3048;

    let BMI = 0;

    // console.log(`heightInMeter = ${heightInMeter}`);
    // console.log(`weight = ${weight}`);

    if (heightInMeter <= 0 && weight <= 0) {
        document.querySelector('.validation_message_text').innerHTML = "<p class='text-danger'>Please enter valid values.</p>"
    } else {
        BMI = weight / (heightInMeter * heightInMeter);
        document.querySelector('#bmiValue').innerHTML = BMI.toFixed(2);
    }

    const category = document.querySelector("#category");

    if (BMI < 18.5) {
        category.innerHTML = "Underweight";
    } else if (BMI >= 18.5 && BMI < 25) {
        category.innerHTML = "Normal Weight";
    } else if (BMI >= 25 && BMI < 30) {
        category.innerHTML = "Overweight";
    }else{
        category.innerHTML = "Obese";
    }
}