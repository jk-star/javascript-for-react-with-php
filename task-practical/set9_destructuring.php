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
                        <h3 class="mb-3">Object Destructuring</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="user_destructuring mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Array Destructuring</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="students_list mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Object Default Values</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="default_value mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Rename Variables</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="rename_variables mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">API Response Destructuring</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="api_response mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">User Profile</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="user_profile mb-3 mt-3 card shadow-sm p-3"></div>
                    </div>
                </div>

                <!-- script -->

                <script>
                    //Object Destructuring

                    let users = {
                        id: 1,
                        name: "Amit Sharma",
                        age: 25,
                        city: "Delhi",
                        email: "amit@gmail.com",
                        isActive: true
                    };

                    const {
                        name,
                        age,
                        city,
                        email,
                        isActive
                    } = users;
                    document.querySelector('.user_destructuring').innerHTML = `
                        Name = ${name} <br/>
                        Age = ${age} <br/>
                        City = ${city} <br/>
                        Email = ${email} <br/>
                        Active = ${isActive} <br/>
                    `;
                    //Ab baar-baar user.name likhne ki zarurat nahi.

                    // Array Destructuring
                    let students = [
                        "Rahul Verma",
                        "Priya Singh",
                        "Amit Sharma",
                        "Neha Gupta",
                        "Rohit Kumar",
                        "Anjali Mehta"
                    ];
                    const [stu1, stu2, stu3, stu4, stu5, stu6] = students;
                    document.querySelector('.students_list').innerHTML = `
                    ${stu1}, ${stu2}, ${stu3}, ${stu4}, ${stu5}, ${stu6}
                    `;

                    //Default Values

                    let employee = {
                        id: 101,
                        emp_name: "Amit Sharma",
                        department: "IT"
                    };

                    let {
                        id,
                        emp_name,
                        department,
                        salary = 55000,
                        emp_email = "Not Available"
                    } = employee;
                    document.querySelector('.default_value').innerHTML = `
                    Id = ${id} <br/>
                    Name = ${name} <br/>
                    Department = ${department} <br/>
                    Salary = ${salary} <br/>
                    Email = ${emp_email} <br/> `;

                    //Rename Variables
                    let product = {
                        id: 1,
                        name: "Laptop",
                        price: 55000,
                        category: "Electronics",
                        stock: 10
                    };

                    // Object Destructuring + Rename Variables
                    let {
                        id: productId,
                        name: productName,
                        price: productPrice,
                        category: productCategory,
                        stock: productStock
                    } = product;
                    document.querySelector('.rename_variables').innerHTML = `
                    Id = ${productId} <br/>
                    Name = ${productName} <br/>
                    Price = ${productPrice} <br/>
                    Category = ${productCategory} <br/>
                    Stock = ${productStock} <br/> `;

                    //API Response Destructuring
                    let response = {
                        status: 200,
                        message: "User fetched successfully",
                        data: {
                            response_id: 101,
                            response_name: "Rahul Verma",
                            response_email: "rahul@gmail.com",
                            response_city: "Delhi"
                        }
                    };
                    // Object Destructuring
                    let {
                        status,
                        message,
                        data: {
                            response_id,
                            response_name,
                            response_email,
                            response_city
                        }
                    } = response;
                    document.querySelector('.api_response').innerHTML = `
                    Status : ${status} <br/>
                    Message : ${message} <br/>
                    id : ${response_id} <br/>
                    Name : ${response_name} <br/>
                    Email : ${response_email} <br/>
                    City : ${response_city} <br/> `;

                    //User Profile
                    let user = {
                        user_name: "Rohit Kumar",
                        user_mobile: "9876543210",
                        user_email: "rohit.kumar@gmail.com",
                        user_address: {
                            houseNumber: "A-102",
                            street: "MG Road",
                            user_city: "Indore",
                            state: "Madhya Pradesh",
                            pincode: "452001"
                        }
                    };
                    let {
                        user_name,
                        user_mobile,
                        user_email,
                        user_address: {
                            houseNumber,
                            street,
                            user_city,
                            state,
                            pincode
                        }

                    } = user;

                    document.querySelector('.user_profile').innerHTML = `
                    Name = ${user_name} <br/>
                    Email = ${user_email} <br/>
                    Mobile = ${user_mobile} <br/>
                    Address = ${houseNumber}, ${street}, ${user_city}, ${state},
                    ${pincode} <br/> `;
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