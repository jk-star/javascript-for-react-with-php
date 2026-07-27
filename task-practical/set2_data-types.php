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

                    <h4 class="fw-bold">Practice Set 2 – Data Types</h4>

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
                        <h3 class="mb-2 mt-2">1. User Profile Banao</h3>
                        <b class="text-success text-capitaliz">output</b>
                        <div class="userProfile mb-3 mt-3 card shadow-sm p-3"> </div>

                        <h3 class="mb-2 mt-2">2. Product Details Object Me Store Karo.</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="product_details mb-3 mt-3 card shadow-sm p-3"> </div>

                        <h3 class="mb-2 mt-2">3. Cart items array me store karo.</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="cart_items mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-2 mt-2">4. Boolean se login status check karo</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="login mb-3 mt-3 card shadow-sm p-3"></div>
                    </div>
                </div>

                <!-- script -->
                <script>
                    //Practice Set 2 – Data Types

                    //User Profile Banao
                    let userName = "neha singh";
                    let userAge = 28;
                    let city = "lucknow";

                    let user = {
                        "name": userName,
                        "age": userAge,
                        "city": city
                    }

                    document.querySelector('.userProfile').innerHTML = `name = ${user.name} <br/>
                    age = ${user.age} <br/>
                    city = ${user.city}`;

                    //Product Details Object Me Store Karo
                    let productName = 'book';
                    let price = 599;
                    let category = 'book';
                    let stock = 8;

                    let productDetails = {
                        "name": productName,
                        "price": price,
                        "category": category,
                        "stock": stock
                    }

                    document.querySelector('.product_details').innerText = JSON.stringify(productDetails);

                    //Cart Items Array Me Store Karo

                    let items = Array("book", 599);
                    document.querySelector('.cart_items').innerHTML = `item = ${items[0]} <br/> price = ${items[1]}`

                    // console.log(Items instanceof Array);
                    // console.log(Array.isArray(Items));


                    //Boolean se login status check karo.

                    let isUserlogged = false;
                    let loginStatus = isUserlogged ? "User logged in" : "Please login first";
                    document.querySelector('.login').innerText = loginStatus;
                </script>

                <!-- Previous & Next Buttons -->
                <div class="button-wrapper">
                    <a href="set1_variables.php" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left"></i> Previous
                    </a>

                    <a href="set3_template-literals.php" class="btn btn-primary">
                        Next <i class="bi bi-arrow-right"></i>
                    </a>
                </div>


            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
