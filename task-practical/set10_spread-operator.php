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
                        <h3 class="mb-3">Spread Operator <mark>(...)</mark> ka use karke <mark>array</mark> ki copy banao.</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="array-copy mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Spread Operator <mark>(...)</mark> ka use karke <mark>object</mark> ki copy banao.</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="object_copy mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Spread Operator <mark>(...)</mark> ka use karke dono <mark>arrays</mark> merge karo.</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="merge_array mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Spread Operator <mark>(...)</mark> ka use karke dono <mark>objects</mark> merge karo.</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="merge-object mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Spread Operator <mark>(...)</mark> ka use karke naye product ko cart me add karo.</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="updated_cart mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Spread Operator <mark>(...)</mark> ka use karke profile update karo.</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="profile_update mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Spread Operator <mark>(...)</mark> ka use karke product list me add karo.</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="updated_product mb-3 mt-3 card shadow-sm p-3"></div>

                    </div>
                </div>

                <!-- script -->

                <script>
                    //array copy

                    let fruits = ["Apple", "Banana", "Mango"];
                    let newFruits = [...fruits];
                    document.querySelector('.array-copy').innerHTML = `
                    Array = ${fruits.join()} <br/> <br/>
                    New Array = ${newFruits.join()} `;

                    //object copy

                    let employee = {
                        id: 101,
                        name: "Amit Sharma",
                        department: "IT",
                        salary: 55000
                    };

                    let newEmployee = {
                        ...employee
                    };
                    document.querySelector('.object_copy').innerHTML = `
                    Object = ${JSON.stringify(employee)} <br/> <br/>
                    New Object = ${JSON.stringify(newEmployee)} `;

                    //Spread Operator (...) ka use karke dono arrays merge karo.

                    let electronics = [
                        "Laptop",
                        "Mobile",
                        "Tablet",
                        "Smart Watch"
                    ];

                    let accessories = [
                        "Mouse",
                        "Keyboard",
                        "Headphones",
                        "USB Cable"
                    ];

                    let electronicsAccessories = [...electronics, ...accessories];
                    document.querySelector('.merge_array').innerHTML = electronicsAccessories.join();

                    //Spread Operator (...) ka use karke dono objects merge karo.
                    let employees = {
                        id: 101,
                        name: "Amit Sharma",
                        department: "IT",
                        salary: 55000
                    };
                    let employeeContact = {
                        email: "amit@gmail.com",
                        mobile: "9876543210",
                        city: "Delhi",
                        isActive: true
                    };
                    let employeesContactList = {
                        ...employees,
                        ...employeeContact
                    }
                    document.querySelector('.merge-object').innerHTML = JSON.stringify(employeesContactList);

                    //Spread Operator (...) ka use karke naye product ko cart me add karo.
                    let cart = [{
                            id: 1,
                            name: "Laptop",
                            price: 55000,
                            quantity: 1
                        },
                        {
                            id: 2,
                            name: "Mouse",
                            price: 700,
                            quantity: 2
                        },
                        {
                            id: 3,
                            name: "Keyboard",
                            price: 1200,
                            quantity: 1
                        }
                    ];

                    let newProduct = {
                        id: 4,
                        name: "Headphones",
                        price: 2500,
                        quantity: 1
                    };

                    let updatedCart = [...cart, newProduct];
                    document.querySelector('.updated_cart').innerHTML = JSON.stringify(updatedCart);

                    //Spread Operator (...) ka use karke profile update karo.
                    let user = {
                        id: 101,
                        name: "Rohit Kumar",
                        mobile: "9876543210",
                        email: "rohit@gmail.com",
                        city: "Delhi",
                        state: "Delhi"
                    };

                    let updatedDetails = {
                        mobile: "9998887776",
                        email: "rohit.kumar@gmail.com",
                        city: "Jaipur",
                        state: "Rajasthan"
                    };
                    let updatedUsers = {
                        ...user,
                        updatedDetails
                    }
                    document.querySelector('.profile_update').innerHTML = JSON.stringify(updatedUsers);

                    //Spread Operator (...) ka use karke product list me add karo.
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
                            name: "Headphones",
                            price: 2500,
                            category: "Accessories",
                            stock: 15
                        }
                    ];
                    let updatedProduct = [...products, newProduct];
                    document.querySelector('.updated_product').innerHTML = JSON.stringify(updatedProduct);

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