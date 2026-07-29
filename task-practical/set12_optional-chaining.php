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
                        <h3 class="mb-3">API Response</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="api-response mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">User Profile</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="user-profile mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Customer Nested Address</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="customer-details mb-3 mt-3 card shadow-sm p-3"></div>
                    </div>
                </div>

                <!-- script -->

                <script>
                    //API Response
                    let response = {
                        status: 200,
                        message: "User fetched successfully",
                        data: {
                            id: 101,
                            name: "Rahul Verma",
                            email: "rahul@gmail.com",
                            mobile: "9876543210",
                            city: "Delhi"
                        }
                    };
                    let displayApiResponse = `
                    Status = ${response?.status} <br/>
                    Message = ${response?.message} <br/>
                    Name = ${response?.data?.name} <br/>
                    Email = ${response?.data?.email} <br/>
                    Mobile = ${response?.data?.mobile} <br/>
                    City = ${response?.data?.city}  `;
                    document.querySelector('.api-response ').innerHTML = displayApiResponse;

                    //User Profile
                    let user = {
                        id: 101,
                        name: "Rohit Kumar",
                        age: 25,
                        email: "rohit@gmail.com",
                        mobile: "9876543210"
                    };

                    document.querySelector('.user-profile').innerHTML = `
                    Name = ${user?.name} <br/>
                    City = ${user?.city}<br/>
                    State = ${user?.state}`;


                    let customer = {
                        customer_name: "Rohit Kumar",
                        mobile: "9876543210",
                        email: "rohit.kumar@gmail.com",
                        address: {
                            houseNumber: "A-102",
                            street: "MG Road",
                            city: "Indore",
                            state: "Madhya Pradesh",
                            pincode: "452001"
                        }
                    };

                    document.querySelector('.customer-details').innerHTML = `
                    Address = House Number : ${customer?.address?.houseNumber} , 
                    Street : ${customer?.address?.state} , 
                    City : ${customer?.address?.city} ,
                    Pincod : ${customer?.address?.pincode}
                    `

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