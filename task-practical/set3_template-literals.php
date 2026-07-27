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

                    <h4 class="fw-bold">Practice Set 3 – Template Literals</h4>

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
                        <h3 class="mb-2 mt-2">1. Welcome message banao.</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="welcome_msg mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-2 mt-2">2. Invoice print karo.</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="invoice mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-2 mt-2">3. Student Result Message Generate Karo.</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="stu_result mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-2 mt-2">4. Order Confirmation Message Banao.</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="confirmation_msg mb-3 mt-3 card shadow-sm p-3"></div>
                    </div>
                </div>

                <!-- script -->
                <script>
                    //Practice Set 3 – Template Literals

                    //Welcome message banao.
                    let welcomeName = 'Sanjana';
                    document.querySelector('.welcome_msg').innerText = `Welcome, ${welcomeName}`;

                    //Invoice print karo.
                    let customerName = 'lalvani';
                    let customerProductName = "book";
                    let customerProductPrice = 299;
                    let quantity = 3;
                    let totalAmount = customerProductPrice * quantity;

                    document.querySelector('.invoice').innerHTML = `
                    <table border="1">
                    <tr>
                        <th>Name</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total Ammount</th>
                    </tr>
                    <tr>
                        <td>${customerName} </td>
                        <td>${customerProductName}</td>
                        <td>₹${customerProductPrice}</td>
                        <td>${quantity} </td>
                        <td>₹${totalAmount} </td>
                    </tr>
                    </table>`;

                    // Student Result Message Generate Karo
                    let studentName = 'Shalu';
                    let studentMarks = 55;
                    let resultMsg = (studentMarks >= 33) ? "Pass" : "Fail";

                    document.querySelector('.stu_result').innerHTML = `
                    <table border="1">
                    <tr>
                        <td><b>Name</b></td>
                        <td>${studentName}</td>
                    </tr>
                    <tr>
                        <td><b>Marks</b></td>
                        <td>${studentMarks}</td>
                    </tr>
                    <tr>
                        <td><b>Result</b></td>
                        <td>${resultMsg}</td>
                    </tr>
                    </table>
                    `;

                    // Order Confirmation Message Banao.

                    let custerNameInvoice = 'Rajan';
                    let productNameInvoice = 'laptop';
                    let orderId = 2356;
                    let today = new Date();
                    let deliveryDate =
                        `${today.getDate()}/${today.getMonth() + 1}/${today.getFullYear()}`;

                    document.querySelector('.confirmation_msg').innerHTML = `
                    <h3>Order Confirmed </h3>

                    <p>Hello ${custerNameInvoice},</p>

                    <p>Your order has been placed successfully.</p>

                    <p><b>Product:</b> ${productNameInvoice}</p>

                    <p><b>Order ID:</b> ${orderId}</p>

                    <p><b>Order Date:</b> ${deliveryDate}</p>`;
                </script>

                <!-- Previous & Next Buttons -->
                <div class="button-wrapper">
                    <a href="set2_data-types.php" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left"></i> Previous
                    </a>

                    <a href="set4_conditionals.php" class="btn btn-primary">
                        Next <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
