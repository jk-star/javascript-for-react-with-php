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
                        <h3 class="mb-2 mt-2">1. School Attendance Loop लगाकर सभी students के नाम print करो।</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="student_attendance mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-2 mt-2">2. Shopping Cart सभी product prices का total निकालो।</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="shopping_cart mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-2 mt-2">3. Even Numbers 1 से 20 तक loop चलाओ। सिर्फ Even Numbers print करो।</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="even_number mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-2 mt-2">4. Login Attempts मान लो user को 3 बार password डालने का मौका मिलता है।
                            Loop से
                            print करो।</h3>
                        <p>
                            Attempt 1 <br />
                            Attempt 2 <br />
                            Attempt 3
                        </p>
                        <b class="text-success text-capitalize">output</b>
                        <div class="login_attempts mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-2 mt-2">5. Employee Salary [25000, 30000, 28000, 45000] सभी salaries print करो।
                            फिर
                            total salary निकालो।</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="employee_salary mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-2 mt-2">6. Online Store array ["Laptop", "Mouse", "Keyboard", "Monitor"] Output
                            Product
                            1 : Laptop Product 2 : Mouse
                            Product 3 : Keyboard Product 4 : Monitor</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="online_store mb-3 mt-3 card shadow-sm p-3"></div>


                        <h3 class="mb-2 mt-2">7. Marks Sheet Array [80, 75, 92, 60, 88, 32] Loop लगाकर अगर marks =33 तो
                            Pass
                            वरना
                            Fail</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="marks_sheet mb-3 mt-3 card shadow-sm p-3"></div>


                        <h3 class="mb-2 mt-2">8. Discount Products [1000, 2000, 500, 3000] हर product पर 10% discount
                            निकालो।
                        </h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="discount_product_list mt-3 mb-3 card shadow-sm p-3"></div>

                        <h3 class="mb-2 mt-2">9. E-commerce Cart
                            Array [ { name:"Laptop", price:50000 }, { name:"Mouse", price:1000 }, { name:"Keyboard",
                            price:2000 } ]

                            Print Laptop - ₹50000 Mouse - ₹1000 Keyboard - ₹2000 Total = ₹53000</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="carts mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-2 mt-2">10. User List [ { name:"Rahul", age:22 }, { name:"Priya", age:25 }, {
                            name:"Aman", age:20 } ]
                            Output Rahul is 22 years old Priya is 25 years old Aman is 20 years old</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="user_list mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-2 mt-2">11. Order Status [ "Pending", "Delivered", "Cancelled", "Pending" ]
                            Count करो Pending = ? Delivered = ? Cancelled = ?</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="order_status mb-3 mt-3 card shadow-sm p-3"></div>

                    </div>
                </div>

                <!-- script -->

                <script>
                    //Practice Set 5 – Loop

                    //School Attendance Loop लगाकर सभी students के नाम print करो।
                    let students = ["Rahul", "Priya", "Aman", "Neha", "Rohit"];
                    const attendance = document.querySelector(".student_attendance");
                    for (let i = 0; i < students.length; i++) {
                        attendance.innerHTML += `<p> ${students[i]} </p>`;
                    }

                    //Shopping Cart सभी product prices का total निकालो।

                    let cart = [200, 500, 1000, 150];
                    let total = 0;
                    const shoppingCart = document.querySelector('.shopping_cart');
                    for (let i = 0; i < cart.length; i++) {
                        total += cart[i];
                    }
                    shoppingCart.innerText = total;

                    //Even Numbers 1 से 20 तक loop चलाओ। सिर्फ Even Numbers print करो।
                    const even_number = document.querySelector('.even_number');
                    for (let i = 1; i <= 20; i++) {
                        if (i % 2 === 0) {
                            even_number.innerHTML += `<span> ${i} </span>`;
                        }
                    }

                    //Login Attempts मान लो user को 3 बार password डालने का मौका मिलता है।
                    const loginAttempts = document.querySelector('.login_attempts');
                    let output = `<ul>`;
                    for (let i = 1; i <= 3; i++) {
                        output += `<li>Attempts ${i}</li>`;
                    }
                    output += `</ul>`;
                    loginAttempts.innerHTML = output;

                    //Employee Salary [25000, 30000, 28000, 45000] सभी salaries print करो। फिर total salary निकालो।
                    let empSalary = [25000, 30000, 28000, 45000];
                    const employeeSalary = document.querySelector('.employee_salary');
                    let empSalaryOutput = "";
                    let totalEmpSalary = 0;
                    for (let i = 0; i < empSalary.length; i++) {
                        empSalaryOutput += `<p>Employee ${i + 1} = ${empSalary[i]}</p>`;
                        totalEmpSalary += empSalary[i];
                    }

                    employeeSalary.innerHTML = `<p> ${empSalaryOutput} <br/> Total Employee Salary = ${totalEmpSalary}<p>`;

                    //Online Store
                    let stores = ["Laptop", "Mouse", "Keyboard", "Monitor"];
                    const onlineStore = document.querySelector('.online_store');
                    let storesOutput = "";
                    for (let i = 0; i < stores.length; i++) {
                        onlineStore.innerHTML += `<p>Product ${i + 1} = ${stores[i]}</p>`;
                    }

                    //Marks Sheet Array [80, 75, 92, 60, 88, 32] Loop लगाकर अगर marks =33 तो Pass वरना Fail
                    let marks = [80, 75, 92, 60, 88, 32];
                    let pass_status = "";
                    const marksSheet = document.querySelector('.marks_sheet');
                    for (let i = 0; i < marks.length; i++) {
                        if (marks[i] >= 33) {
                            pass_status += `${marks[i]} = Pass <br/>`;
                        } else {
                            pass_status += `${marks[i]} = Fail <br/>`;
                        }
                    }
                    marksSheet.innerHTML = `<p>${pass_status}</p>`;

                    //Discount Products [1000, 2000, 500, 3000] हर product पर 10% discount निकालो।
                    let products = [1000, 2000, 500, 3000];
                    let discount = 0;
                    let display = '';
                    const product_list = document.querySelector('.discount_product_list');
                    for (let i = 0; i < products.length; i++) {
                        //console.log(products[i]);
                        discount = (products[i] * 10) / 100;
                        display += `<p> ${products[i]} -> ${products[i] - discount} </p>`;
                    }
                    product_list.innerHTML = display;

                    //E-commerce Cart Array [ { name:"Laptop", price:50000 }, { name:"Mouse", price:1000 }, { name:"Keyboard", price:2000 } ] Print Laptop - ₹50000 Mouse - ₹1000 Keyboard - ₹2000 Total = ₹53000
                    const carts_div = document.querySelector('.carts');
                    let carts = [{
                            name: "Laptop",
                            price: 50000
                        },
                        {
                            name: "Mouse",
                            price: 1000
                        },
                        {
                            name: "Keyboard",
                            price: 2000
                        }
                    ];
                    let displayCart = "";
                    let totalProductPrice = 0;
                    for (let cart of carts) {
                        totalProductPrice += cart.price;
                        displayCart += `<p> ${cart.name} - ₹${cart.price} </p>`;
                        //console.log(key, carts[key].price);

                    }

                    carts_div.innerHTML = `${displayCart} <br/> Total = ${totalProductPrice}`;

                    //User List [ { name:"Rahul", age:22 }, { name:"Priya", age:25 }, { name:"Aman", age:20 } ]
                    // Output Rahul is 22 years old Priya is 25 years old Aman is 20 years old
                    const userListDiv = document.querySelector('.user_list');
                    let userList = [{
                            name: "Rahul",
                            age: 22
                        },
                        {
                            name: "Priya",
                            age: 25
                        },
                        {
                            name: "Aman",
                            age: 20
                        }
                    ];
                    let userListDisplay = "";
                    for (let users of userList) {
                        //console.log(users.name);
                        userListDisplay += `<p> ${users.name} is ${users.age} years old </p>`;
                    }

                    userListDiv.innerHTML = userListDisplay;

                    //Order Status [ "Pending", "Delivered", "Cancelled", "Pending" ] Count करो Pending = ? Delivered = ? Cancelled = ?
                    const orderStatusDiv = document.querySelector('.order_status');
                    let orderStatus = ["Pending", "Delivered", "Cancelled", "Pending"];
                    let pendingCount = 0;
                    let deliveredCount = 0;
                    let cancelledCount = 0;

                    orderStatus.forEach(function(orders) {
                        //console.log(orders);
                        if (orders === 'Pending') {
                            pendingCount++;
                        } else if (orders === 'Delivered') {
                            deliveredCount++;
                        } else if (orders === 'Cancelled') {
                            cancelledCount++;
                        }
                    });

                    orderStatusDiv.innerHTML = `Pending = ${pendingCount} Delivered = ${deliveredCount} Cancelled = ${cancelledCount}`;
                </script>

                <!-- Previous & Next Buttons -->
                <div class="button-wrapper">
                    <a href="set4_conditionals.php" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left"></i> Previous
                    </a>

                    <a href="set6_functions.php" class="btn btn-primary">
                        Next <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
