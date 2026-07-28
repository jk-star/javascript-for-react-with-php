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
                        <h3 class="mb-3">Employee Database</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="employee_data mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Student Report Card</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="student_card mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Product Details</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="product_list mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Customer Address (Nested Object)</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="customer_details mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Object Property Update</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="object_update mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">New Property Add Karna</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="property_add mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Property Delete Karna</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="property_delete mb-3 mt-3 card shadow-sm p-3"></div>
                        
                        <h3 class="mb-3"></h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="mb-3 mt-3 card shadow-sm p-3"></div>
                    </div>
                </div>

                <!-- script -->

                <script>
                    //Employee Database
                    let employees = {
                        id: 101,
                        name: "Amit Sharma",
                        department: "IT",
                        salary: 55000,
                        email: "amit.sharma@gmail.com"
                    };
                    document.querySelector('.employee_data').innerHTML = `
                    Name = ${employees.name} <br/>
                    Department = ${employees.department} <br/>
                    Salary = ${employees.salary} <br/>
                    Email = ${employees.email} <br/> `;

                    // Student Report Card
                    let students = {
                        name: "Rahul Verma",
                        rollNumber: 101,
                        class: "12th",
                        marks: {
                            english: 85,
                            math: 92,
                            science: 88
                        }
                    };

                    let reportCard = "";
                    let markSum = 0;
                    reportCard += `
                    Name = ${students.name} <br/>
                    Roll No. = ${students.rollNumber} <br/>
                    Class = ${students.class} <br/>
                    `;
                    for (let mark in students.marks) {
                        reportCard += `${mark} = ${students.marks[mark]} <br/>`;
                        markSum += students.marks[mark];
                    }
                    reportCard += `<br/> Total Marks = ${markSum}`;
                    document.querySelector('.student_card').innerHTML = reportCard;

                    //Product Details
                    let products = [{
                            id: 1,
                            name: "Laptop",
                            price: 55000,
                            category: "Electronics",
                            stock: 10
                        },
                        {
                            id: 2,
                            name: "Mobile",
                            price: 18000,
                            category: "Electronics",
                            stock: 25
                        },
                        {
                            id: 3,
                            name: "Headphone",
                            price: 2500,
                            category: "Accessories",
                            stock: 15
                        },
                        {
                            id: 4,
                            name: "Keyboard",
                            price: 1200,
                            category: "Accessories",
                            stock: 8
                        },
                        {
                            id: 5,
                            name: "Mouse",
                            price: 700,
                            category: "Accessories",
                            stock: 20
                        }
                    ];
                    let productList = "";
                    productList += `<table><tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Stock</th>
                    </tr>`;
                    products.forEach((product) => {
                        productList += `<tr>
                        <td>${product.name}</td>
                        <td>${product.price}</td>
                        <td>${product.category}</td>
                        <td>${product.stock}</td>
                        </tr>`;
                    });
                    productList += `</table>`;
                    document.querySelector('.product_list').innerHTML = productList;

                    //Customer Address (Nested Object)
                    let customer = {
                        name: "Rohit Kumar",
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

                    document.querySelector('.customer_details').innerHTML = `
                    Name = ${customer.name} <br/>
                    Mobile = ${customer.mobile} <br/>
                    Email = ${customer.email} <br/>
                    Address = ${customer.address.houseNumber}, ${customer.address.street}, 
                    ${customer.address.street}, ${customer.address.city}, 
                    ${customer.address.state}, ${customer.address.pincode}
                    <br/>`;

                    //Object Property Update
                    employees.name = "Amit Pandey";
                    document.querySelector('.object_update').innerHTML = JSON.stringify(employees);

                    //New Property Add Karna
                    employees.age = 35;
                    document.querySelector('.property_add').innerHTML = JSON.stringify(employees);
                    
                    //Property Delete Karna
                    delete employees.salary;
                    document.querySelector('.property_delete').innerHTML = JSON.stringify(employees);
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