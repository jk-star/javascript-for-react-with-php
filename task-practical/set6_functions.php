<?php include 'header.php'; ?>

<body>

    <div class="d-flex">

        <!-- Sidebar -->

        <?php include 'sidebar.php'; ?>

        <!-- Main Content -->

        <div class="main-content">

            <!-- Navbar -->

            <nav class="navbar navbar-expand-lg bg-white shadow-sm">

                <div class="container-fluid">

                    <h4 class="fw-bold">Practice Set 6 – Functions</h4>

                    <div class="ms-auto">

                        <button class="btn btn-primary">
                            <i class="bi bi-bell"></i>
                        </button>

                    </div>

                </div>

            </nav>

            <div class="container-fluid mt-4">

                <!-- Cards -->
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="mb-3">GST calculator</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="gst-calculator mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">EMI calculator</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="emi-calculator mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">BMI calculator</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="bmi-calculator mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Electricity bill</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="electricity-bill mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Discount Calculator</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="discount-calculator mb-3 mt-3 card shadow-sm p-3"></div>
                    </div>
                </div>

                <!-- script -->

                <script>
                    //GST calculator
                    let GSTCalculator = (productPrice, GSTPercentage) => {
                        let GSTAmount = (productPrice * GSTPercentage) / 100;
                        let finalPrice = productPrice + GSTAmount;
                        return `<p>
                            Product Price = ${productPrice} <br/>
                            GST Amount = ${GSTAmount} <br/>
                            Final Price = ${finalPrice}
                            </p>`;
                    }

                    //EMI calculator
                    let productPriceWithGST = (GSTCalculator(2000, 18));
                    document.querySelector('.gst-calculator').innerHTML = productPriceWithGST;

                    let emiCalculator = (loanAmount, interestRate, loanDuration) => {
                        let years = loanDuration / 12;
                        let totalInterest = (loanAmount * interestRate * years) / 100;
                        let totalPayable = loanAmount + totalInterest;
                        let monthlyEmi = totalPayable / loanDuration;
                        let roundedEMI = Number(monthlyEmi.toFixed(2));
                        return `<p>EMI = ${roundedEMI} <br/> Total Payable Amount = ${totalPayable} </p>`;
                    }

                    let emiChart = emiCalculator(100000, 10, 24);
                    document.querySelector('.emi-calculator').innerHTML = emiChart;

                    //BMI Calculator
                    let bmiCalculator = (weight, height) => {
                        let heightInMeter = height * 0.3048;
                        let bmi = (weight / (heightInMeter * heightInMeter)).toFixed(2);
                        let category = "";
                        if (bmi < 18.5) {
                            category = "Underweight";
                        } else if (bmi >= 18.5 && bmi <= 24.9) {
                            category = "Normal Weight";
                        } else if (bmi >= 25 && bmi <= 29.9) {
                            category = "Overweight";
                        } else {
                            category = "Obese";
                        }

                        return `<p>
                                    BMI = ${bmi}<br>
                                    Category = ${category}
                                </p>`;
                    }

                    document.querySelector('.bmi-calculator').innerHTML = bmiCalculator(66, 5)

                    //Electricity Bill Calculator
                    let electricityBillCalculator = (totalUnits, unitPrice, extraCharges = 0) => {
                        let electricityBill = (totalUnits * unitPrice) + extraCharges;
                        return electricityBill;
                    }

                    document.querySelector('.electricity-bill').innerHTML = electricityBillCalculator(100, 10, 5);

                    // Discount Calculator
                    let discountCalculator = (originalPrice, discountPercentage) => {
                        let discountAmount = originalPrice * discountPercentage / 100;
                        let finalPrice = originalPrice + discountAmount;
                        return `<p>
                            Original Price = ${originalPrice} <br/>
                            Discount Amount = ${discountAmount} <br/>
                            Final Price = ${finalPrice}
                             </p>`;
                    }
                    document.querySelector('.discount-calculator').innerHTML = discountCalculator(200, 10);
                </script>

                <!-- Previous & Next Buttons -->
                <div class="button-wrapper">
                    <a href="set5_loop.php" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left"></i> Previous
                    </a>

                    <a href="set7_array.php" class="btn btn-primary">
                        Next <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
