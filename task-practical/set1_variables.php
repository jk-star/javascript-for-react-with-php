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

                    <h4 class="fw-bold">Practice Set 1 – Variables (let, const, var)</h4>

                    <div class="ms-auto">

                        <button class="btn btn-primary">
                            <i class="bi bi-bell"></i>
                        </button>

                    </div>

                </div>

            </nav>

            <div class="container-fluid mt-4">

                <!-- Content -->
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="mb-2 mt-2">1. Student Information Store Karna</h3>
                        <b class="text-success text-capitaliz">output</b>
                        <div class="student_info mb-3 mt-3 card shadow-sm p-3"> </div>

                        <h3 class="mb-2 mt-2">2. Shopping cart ka total amount variable me rakho.</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="product_price mb-3 mt-3 card shadow-sm p-3"> </div>

                        <h3 class="mb-2 mt-2">3. User Login Status Store Karna.</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="login_status mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-2 mt-2">4. Discount Percentage Calculate Karna</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="final_price mb-3 mt-3 card shadow-sm p-3"></div>
                    </div>
                </div>
                <!-- Previous & Next Buttons -->
                <div class="button-wrapper">
                    <a href="#" class="btn btn-outline-secondary disabled-link" aria-disabled="true" tabindex="-1">
                        <i class="bi bi-arrow-left"></i> Previous
                    </a>

                    <a href="set2_data-types.php" class="btn btn-primary">
                        Next <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <!-- script -->
                <script>
                    //Practice Set 1 – Variables (let, const, var)

                    //Student Information Store Karna
                    let name = "neha singh";
                    let age = 28;
                    let className = "MCA";
                    let rollNumber = 23;
                    let student_info = (`Name = ${name}, Age = ${age}, Class = ${className}, Roll Number = ${rollNumber}`);
                    document.querySelector('.student_info').innerHTML = student_info;

                    //Shopping cart ka total amount variable me rakho

                    let productPrice = 200;
                    let tax = 20;
                    let platformFee = 20;

                    let totalProductPrice = productPrice + tax + platformFee;
                    document.querySelector('.product_price').innerText = `Product Price = ${totalProductPrice}`;
                    // console.dir(document.querySelector('.product_price'));

                    //User Login Status Store Karna
                    let islogged = true;
                    let status = islogged ? "Logged In" : "Logged Out";

                    document.querySelector('.login_status').innerText = status;

                    //Discount Percentage Calculate Karna
                    let originalPrice = 2000;
                    let discountPercentage = 10;
                    let discountAmount = (originalPrice * discountPercentage) / 100;
                    let finalPrice = originalPrice - discountAmount

                    let AmountShow = `Original Price = ${originalPrice} <br /> Discount Amount = ${discountAmount} <br />
                Final Price = ${finalPrice}`;
                    document.querySelector('.final_price').innerHTML = AmountShow;
                </script>
            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
