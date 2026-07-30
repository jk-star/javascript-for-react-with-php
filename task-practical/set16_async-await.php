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

                    <h4 class="fw-bold">Admin Dashboard</h4>

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
                        <h3 class="mb-3">User data fetch</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="user-data mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Product loading</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="product-loading mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Student Result</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="student-result mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Weather app</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="weather mb-3 mt-3 card shadow-sm p-3"></div>
                    </div>
                </div>

                <!-- script -->

                <script>
                    // User Data Fetch

                    const userDataDiv = document.querySelector(".user-data");

                    // Promise
                    const fetchUserData = new Promise((resolve, reject) => {

                        let isDataFound = true; // true = Success, false = Error

                        userDataDiv.innerHTML = "Fetching User Data...";

                        setTimeout(() => {

                            if (isDataFound) {

                                let user = {
                                    id: 101,
                                    name: "Jyoti Singh",
                                    email: "jyoti@gmail.com",
                                    city: "Delhi"
                                };

                                resolve(user);

                            } else {

                                reject("❌ Server Error! User Data Not Found");

                            }

                        }, 3000);

                    });

                    // Async Function
                    async function getUserData() {

                        try {

                            const user = await fetchUserData;

                            userDataDiv.innerHTML += `
                                <br><br>
                                ID : ${user.id} <br>
                                Name : ${user.name} <br>
                                Email : ${user.email} <br>
                                City : ${user.city}
                            `;

                        } catch (error) {

                            userDataDiv.innerHTML += `<br>${error}`;

                        }

                    }

                    // Function Call
                    getUserData();

                    // Product Loading

                    const productDiv = document.querySelector(".product-loading");

                    // Promise
                    const loadProducts = new Promise((resolve, reject) => {

                        let isProductLoaded = true; // true = Success, false = Failed

                        productDiv.innerHTML = "Loading Products...";

                        setTimeout(() => {

                            if (isProductLoaded) {

                                let products = [{
                                        id: 1,
                                        name: "Laptop",
                                        price: 55000
                                    },
                                    {
                                        id: 2,
                                        name: "Mobile",
                                        price: 18000
                                    },
                                    {
                                        id: 3,
                                        name: "Keyboard",
                                        price: 1200
                                    }
                                ];

                                resolve(products);

                            } else {

                                reject("❌ Product Loading Failed");

                            }

                        }, 3000);

                    });

                    // Async Function
                    async function getProducts() {

                        try {

                            const products = await loadProducts;

                            productDiv.innerHTML += "<br><br>";

                            products.forEach((product) => {

                                productDiv.innerHTML += `
                                    ID : ${product.id} <br>
                                    Name : ${product.name} <br>
                                    Price : ₹${product.price} <br><br>
                                `;

                            });

                        } catch (error) {

                            productDiv.innerHTML += `<br>${error}`;

                        }

                    }

                    // Function Call
                    getProducts();


                    //Student Result
                    // Student Result

                    const studentResultDiv = document.querySelector(".student-result");

                    // Promise
                    const checkResult = new Promise((resolve, reject) => {

                        let student = {
                            name: "Rahul Verma",
                            marks: 75
                        };

                        studentResultDiv.innerHTML = "Checking Result...";

                        setTimeout(() => {

                            if (student.marks >= 33) {

                                resolve(student);

                            } else {

                                reject("❌ Student Failed");

                            }

                        }, 3000);

                    });

                    // Async Function
                    async function getStudentResult() {

                        try {

                            const student = await checkResult;

                            studentResultDiv.innerHTML += `
                                <br><br>
                                Name : ${student.name} <br>
                                Marks : ${student.marks} <br>
                                Result : ✅ Pass
                            `;

                        } catch (error) {

                            studentResultDiv.innerHTML += `<br>${error}`;

                        }

                    }

                    // Function Call
                    getStudentResult();


                    // Weather App

                    const weatherDiv = document.querySelector(".weather");

                    // Promise
                    const fetchWeather = new Promise((resolve, reject) => {

                        let city = "Delhi";
                        let isWeatherAvailable = true;

                        weatherDiv.innerHTML = "Fetching Weather Data...";

                        setTimeout(() => {

                            if (isWeatherAvailable) {

                                let weather = {
                                    city: city,
                                    temperature: "32°C",
                                    condition: "Sunny",
                                    humidity: "65%"
                                };

                                resolve(weather);

                            } else {

                                reject("❌ Weather Data Not Available");

                            }

                        }, 3000);

                    });

                    // Async Function
                    async function getWeather() {

                        try {

                            const weather = await fetchWeather;

                            weatherDiv.innerHTML += `
                                <br><br>
                                City : ${weather.city} <br>
                                Temperature : ${weather.temperature} <br>
                                Condition : ${weather.condition} <br>
                                Humidity : ${weather.humidity}
                            `;

                        } catch (error) {

                            weatherDiv.innerHTML += `<br>${error}`;

                        }

                    }

                    // Function Call
                    getWeather();
                </script>

                <!-- Previous & Next Buttons -->
                <div class="button-wrapper">
                    <a href="set6_functions.php" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left"></i> Previous
                    </a>

                    <a href="set8_object.php" class="btn btn-primary">
                        Next <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>