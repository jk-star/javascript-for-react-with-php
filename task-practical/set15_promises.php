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
                        <h3 class="mb-3"></h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="download_file mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3"></h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="login_status mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Payment Success</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="payment mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Food Delivery</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="food-delivery mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Student Result</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="student-result mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">OTP Verification</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="otp-verification mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Email Sending</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="email mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3"></h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="data-fetching mb-3 mt-3 card shadow-sm p-3"></div>
                    </div>
                </div>

                <!-- script -->

                <script>
                    //File Download
                    const downloadFileDiv = document.querySelector('.download_file');
                    const downloadFile = new Promise((resolve, reject) => {
                        let isDownloaded = true; // true = Success, false = Failed
                        downloadFileDiv.innerHTML += "Downloading file...";
                        if (isDownloaded) {
                            resolve("✅ File Downloaded Successfully");
                        } else {
                            reject("❌ File Download Failed");
                        }

                    });
                    downloadFile
                        .then((message) => {
                            downloadFileDiv.innerHTML += `<br/> ${message}`;
                        })
                        .catch((error) => {
                            downloadFileDiv.innerHTML += `<br/> ${error}`;
                        })
                        .finally(() => {
                            downloadFileDiv.innerHTML += "<br/> Download Process Completed";
                        });

                    //Login Request
                    const loginStatusDiv = document.querySelector('.login_status');
                    let username = "jyoti singh";
                    let password = 12345;
                    let storeUserName = "jyoti singh";
                    let storePass = 12345;
                    const login = new Promise((resolve, reject) => {
                        if (username === storeUserName && password === storePass) {
                            resolve("✅ Logged In");
                        } else {
                            reject("❌ Invalid Username or Password");
                        }

                    });

                    login
                        .then((message) => {
                            loginStatusDiv.innerHTML += `${message}`;
                        })
                        .catch((error) => {
                            loginStatusDiv.innerHTML += `<br/> ${error}`;
                        })
                        .finally(() => {
                            loginStatusDiv.innerHTML += "<br/> Login Request Completed";
                        });

                    //Payment Success
                    const paymentDiv = document.querySelector('.payment');
                    const paymentPromise = new Promise((resolve, reject) => {
                        let isPaymentSuccessful = true;
                        paymentDiv.innerHTML += "Payment processing...";
                        if (isPaymentSuccessful) {
                            resolve("✅ Payment Success");
                        } else {
                            reject("❌ Payment Failed");
                        }
                    });
                    paymentPromise
                        .then((message) => {
                            paymentDiv.innerHTML += `<br/> ${message}`;
                        })
                        .catch((error) => {
                            paymentDiv.innerHTML += `<br/> ${error}`;
                        })
                        .finally(() => {
                            paymentDiv.innerHTML += "<br/> Payment processing Completed";
                        });

                    //Food Delivery
                    const foodDeliveryDiv = document.querySelector('.food-delivery');
                    const foodDeliveryPromise = new Promise((resolve, reject) => {
                        let foodOrder = "Pizza";
                        let isDelivered = true; // true = Delivered, false = Cancelled

                        foodDeliveryDiv.innerHTML += `Order: ${foodOrder}<br>`;
                        foodDeliveryDiv.innerHTML += "Restaurant is preparing your order...";

                        if (isDelivered) {
                            resolve("🍕 Food Delivered Successfully");
                        } else {
                            reject("❌ Delivery Cancelled");
                        }
                    });

                    foodDeliveryPromise
                        .then((message) => {
                            foodDeliveryDiv.innerHTML += `<br>${message}`;
                        })
                        .catch((error) => {
                            foodDeliveryDiv.innerHTML += `<br>${error}`;
                        })
                        .finally(() => {
                            foodDeliveryDiv.innerHTML += `<br>Delivery Process Completed`;
                        });

                    //Student Result
                    const studentResultDiv = document.querySelector('.student-result');
                    const studentResultPromise = new Promise((resolve, reject) => {
                        let marks = 55;
                        if (marks > 33) {
                            resolve("Your are pass");
                        } else {
                            reject("Your are fail");
                        }
                    });
                    studentResultPromise
                        .then((message) => {
                            studentResultDiv.innerHTML += `${message}`;
                        })
                        .catch((error) => {
                            studentResultDiv.innerHTML += `<br>${error}`;
                        })
                        .finally(() => {
                            studentResultDiv.innerHTML += `<br>Result Process Completed`;
                        });

                    //otp-verification
                    const otpVerificationDiv = document.querySelector('.otp-verification');
                    const otpVerificationPromise = new Promise((resolve, reject) => {
                        let userOTP = 1526;
                        let storeOTP = 1526;
                        if (userOTP === storeOTP) {
                            resolve("OTP Verified");
                        } else {
                            resolve("Invalid OTP");
                        }
                    });
                    otpVerificationPromise
                        .then((message) => {
                            otpVerificationDiv.innerHTML += `${message}`;
                        })
                        .catch((error) => {
                            otpVerificationDiv.innerHTML += `<br>${error}`;
                        })
                        .finally(() => {
                            otpVerificationDiv.innerHTML += `<br>OTP Verified Completed`;
                        });

                    //Email Sending
                    const emailDiv = document.querySelector(".email");
                    const emailPromise = new Promise((resolve, reject) => {
                        let email = "jyoti@gmail.com";
                        let subject = "Welcome to JavaScript";
                        let isEmailSent = true; // true = Success, false = Failed

                        emailDiv.innerHTML += `Email : ${email} <br>`;
                        emailDiv.innerHTML += `Subject : ${subject} <br>`;
                        emailDiv.innerHTML += "Sending Email...";

                        if (isEmailSent) {
                            resolve("📧 Email Sent Successfully");
                        } else {
                            reject("❌ Email Sending Failed");
                        }
                    });
                    emailPromise
                        .then((message) => {
                            emailDiv.innerHTML += `<br>${message}`;
                        })
                        .catch((error) => {
                            emailDiv.innerHTML += `<br>${error}`;
                        })
                        .finally(() => {
                            emailDiv.innerHTML += `<br>Email Process Completed`;
                        });

                    // Data Fetching
                    const dataFetchingDiv = document.querySelector(".data-fetching");
                    const fetchDataPromise = new Promise((resolve, reject) => {
                        let isResponseReceived = true; // true = Success, false = Error

                        dataFetchingDiv.innerHTML += "Fetching Data From Server...";

                        setTimeout(() => {

                            if (isResponseReceived) {

                                let users = [{
                                        id: 1,
                                        name: "Jyoti Singh",
                                        city: "Delhi"
                                    },
                                    {
                                        id: 2,
                                        name: "Rahul Verma",
                                        city: "Jaipur"
                                    }
                                ];

                                resolve(users);

                            } else {

                                reject("❌ Server Error! Data Not Found");

                            }

                        }, 3000);
                    });

                    fetchDataPromise
                        .then((users) => {

                            dataFetchingDiv.innerHTML += "<br><br>Users List:<br>";

                            users.forEach((user) => {
                            dataFetchingDiv.innerHTML += `
                                ID : ${user.id} <br>
                                Name : ${user.name} <br>
                                City : ${user.city} <br><br>
                            `;
                            });

                        })
                        .catch((error) => {

                            dataFetchingDiv.innerHTML += `<br>${error}`;

                        })
                        .finally(() => {

                            dataFetchingDiv.innerHTML += "<br>Request Completed";

                        });
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