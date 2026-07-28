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
                        <h3 class="mb-3">Display product list </h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="product_list mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Search User by name or id</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="user_result mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Filter active users </h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="active_user mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Show completed tasks</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="task_list mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Products ke naam aur price ko formatted list me convert karna hai.</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="formatted_product mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Check Any Out of Stock Product</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="out_of_stock task_list mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Check All Students Passed</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="pass_student task_list mb-3 mt-3 card shadow-sm p-3"></div>
                    </div>
                </div>

                <!-- script -->

                <script>
                    //Ek product list hai. Sabhi products ko webpage par display karna hai.

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
                    const productList = document.querySelector('.product_list');
                    let product = "";
                    product += `<table>
                    <tr>
                        <th> Product Name </th>
                        <th> Price </th>
                        <th> Category </th>
                        <th> Stock </th>
                    </tr>`
                    products.forEach((item) => {
                        product += `<tr><td>${item.name}</td>
                         <td>${item.price}</td>
                         <td>${item.category}</td>
                         <td>${item.stock}</td></tr>`
                    });
                    product += `</table>`;
                    productList.innerHTML = product;

                    //ID ya Name ke according ek user search karna hai.
                    let users = [{
                            id: 1,
                            name: "Amit Sharma",
                            age: 25,
                            city: "Delhi",
                            email: "amit@gmail.com",
                            isActive: true
                        },
                        {
                            id: 2,
                            name: "Priya Singh",
                            age: 28,
                            city: "Lucknow",
                            email: "priya@gmail.com",
                            isActive: false
                        },
                        {
                            id: 3,
                            name: "Rahul Verma",
                            age: 22,
                            city: "Jaipur",
                            email: "rahul@gmail.com",
                            isActive: true
                        },
                        {
                            id: 4,
                            name: "Neha Gupta",
                            age: 30,
                            city: "Mumbai",
                            email: "neha@gmail.com",
                            isActive: true
                        },
                        {
                            id: 5,
                            name: "Rohit Kumar",
                            age: 27,
                            city: "Patna",
                            email: "rohit@gmail.com",
                            isActive: false
                        }
                    ];

                    let userResult = users.find((user) => {
                        return user.name === "Rohit Kumar";
                    });
                    document.querySelector('.user_result').innerHTML = JSON.stringify(userResult);

                    //Sirf active users dikhane hain.
                    let activeUser = users.filter((user) => {
                        return user.isActive === true;
                    });
                    let activeList = "";
                    activeList += `<table><tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>City</th>
                    <th>Email</th>
                    <th>Active</th>
                    </tr>`;
                    activeUser.forEach((active) => {
                        // console.log(active);
                        activeList += `<tr>
                        <td>${active.name}</td>
                        <td>${active.age}</td>
                        <td>${active.city}</td>
                        <td>${active.email}</td>
                        <td>${active.isActive}</td>
                        </tr>`
                    });
                    activeList += `</tr><table>`;
                    document.querySelector('.active_user').innerHTML = activeList;

                    //Completed tasks hi show karni hain.
                    let tasks = [{
                            id: 1,
                            title: "Complete JavaScript Notes",
                            category: "Study",
                            priority: "High",
                            isCompleted: true
                        },
                        {
                            id: 2,
                            title: "Upload YouTube Video",
                            category: "Work",
                            priority: "High",
                            isCompleted: false
                        },
                        {
                            id: 3,
                            title: "Buy Groceries",
                            category: "Personal",
                            priority: "Medium",
                            isCompleted: true
                        },
                        {
                            id: 4,
                            title: "Practice Array Methods",
                            category: "Study",
                            priority: "High",
                            isCompleted: false
                        },
                        {
                            id: 5,
                            title: "Go to Gym",
                            category: "Health",
                            priority: "Low",
                            isCompleted: true
                        },
                        {
                            id: 6,
                            title: "Read React Documentation",
                            category: "Study",
                            priority: "Medium",
                            isCompleted: false
                        }
                    ];

                    let taskStatus = tasks.filter((task) => {
                        return task.isCompleted === true
                    });

                    // console.log(taskStatus);

                    let taskList = "";
                    taskList += `<table>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Priority</th>
                        <th>Task Status</th>
                    </tr>`;
                    taskStatus.forEach((status) => {
                        taskList += `<tr>
                        <td>${status.title}</td>
                        <td>${status.category}</td>
                        <td>${status.priority}</td>
                        <td>${status.isCompleted}</td>
                        </tr>`;
                    });
                    taskList += `</tr></table>`;
                    document.querySelector('.task_list').innerHTML = taskList;

                    //Products ke naam aur price ko formatted list me convert karna hai
                    let formattedProduct = products.map((product) => {
                        return `Product name = ${product.name} <br/>
                            Price = ₹${product.price} <br/>
                            Quantity = ${product.stock} <br/> <br/>`;
                    });
                    document.querySelector('.formatted_product').innerHTML = formattedProduct;

                    //Check Any Out of Stock Product
                    let OutOfstock = products.some((product) => {
                        return product.stock === 0;
                    });
                    document.querySelector('.out_of_stock').innerText = OutOfstock;

                    //Check All Students Passed

                    let students = [{
                            id: 1,
                            name: "Amit Sharma",
                            marks: 85,
                            grade: "A",
                            isPassed: true
                        },
                        {
                            id: 2,
                            name: "Priya Singh",
                            marks: 42,
                            grade: "C",
                            isPassed: true
                        },
                        {
                            id: 3,
                            name: "Rahul Verma",
                            marks: 28,
                            grade: "F",
                            isPassed: false
                        },
                        {
                            id: 4,
                            name: "Neha Gupta",
                            marks: 91,
                            grade: "A+",
                            isPassed: true
                        },
                        {
                            id: 5,
                            name: "Rohit Kumar",
                            marks: 35,
                            grade: "D",
                            isPassed: true
                        }
                    ];

                    let passStudent = students.every((student) => {
                        return student.isPassed === true;
                    });
                    document.querySelector('.pass_student').innerText = passStudent;
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
