<link href="./css/styel.css" rel="stylesheet">

<body>

    <div class="container">

        <!-- Header -->

        <div class="header">

            <div class="logo">
                <i class="bi bi-calculator"></i>
            </div>

            <div class="title">

                <h1>BMI Calculator</h1>

                <p>
                    Check your Body Mass Index and know your health status
                </p>

            </div>

            <div class="heart">
                <i class="bi bi-heart-pulse-fill"></i>
            </div>

        </div>

        <!-- Main Card -->

        <div class="main-card">

            <!-- Left Side -->

            <div class="left">

                <h2>Enter Your Details</h2>

                <div class="line"></div>
                <div class="validation_message_text"></div>

                <!-- Weight -->

                <div class="input-box">

                    <label>
                        <i class="bi bi-speedometer2"></i>
                        Weight (kg)
                    </label>

                    <input
                        type="number"
                        id="weight"
                        placeholder="Enter Weight">

                </div>

                <!-- Height -->

                <div class="input-box">

                    <label>
                        <i class="bi bi-rulers"></i>
                        Height (feet)
                    </label>

                    <input
                        type="number"
                        step="0.01"
                        id="height"
                        placeholder="Enter Height">

                </div>

                <!-- Buttons -->

                <button id="calculateBtn" onclick="calculateBmiBtn()">

                    <i class="bi bi-calculator"></i>

                    Calculate BMI

                </button>

                <button id="resetBtn">

                    <i class="bi bi-arrow-clockwise" onclick="resetBtn()"></i>

                    Reset

                </button>

            </div>

            <!-- Right Side -->

            <div class="right">

                <img src="image/bmi_fitness_illustration.png" alt="Fitness Girl">

            </div>

        </div>

        <!-- Result -->

        <div class="result-card">

            <div class="bmi-result">

                <h3>Your BMI</h3>

                <h1 id="bmiValue">0.00</h1>

            </div>

            <div class="category-result">

                <h3>Your Category</h3>

                <span id="category">

                    Category

                </span>

                <!-- <p id="message">

                    Your BMI is in the healthy range.

                </p> -->

            </div>

        </div>

        <!-- BMI Guide -->

        <div class="guide guide-card underweight">

            <h2>BMI CATEGORY GUIDE</h2>

            <div class="guide-box">

                <div class="card">

                    <i class="bi bi-person"></i>

                    <h4>Underweight</h4>

                    <p>&lt; 18.5</p>

                </div>

                <div class="card">

                    <i class="bi bi-person-fill"></i>

                    <h4>Normal</h4>

                    <p>18.5 - 24.9</p>

                </div>

                <div class="card">

                    <i class="bi bi-person-standing"></i>

                    <h4>Overweight</h4>

                    <p>25 - 29.9</p>

                </div>

                <div class="card">

                    <i class="bi bi-person-fill-check"></i>

                    <h4>Obese</h4>

                    <p>30+</p>

                </div>

            </div>

        </div>

        <!-- Footer -->

        <div class="footer">

            <i class="bi bi-lightbulb-fill"></i>

            BMI is an approximate indicator of body fat.
            For accurate health advice, consult a healthcare professional.

        </div>

    </div>

   
<script src="./js/script.js">