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
                        <h3 class="mb-3">Total Marks Calculator</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="total_marks mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Dynamic Price Calculator</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="total_price mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Remove Properties (Object Rest)</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="rest-remaining mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Collect Remaining Data (Object Rest)</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="collect-remaining mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Student Attendance</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="student-attendance mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Online Order System</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="online_order mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Exam Result System</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="exam_result mb-3 mt-3 card shadow-sm p-3"></div>
                    </div>
                </div>

                <!-- script -->

                <script>
                    //Total Marks Calculator
                    let marksCalculator = (...marks) => {
                        let totalMarks = 0;
                        // console.log(Array.isArray(marks));
                        marks.forEach((mark) => {
                            totalMarks += mark;
                        });
                        return totalMarks;
                    }

                    document.querySelector('.total_marks').innerHTML = `Total Marks = ${marksCalculator(80,70,55,65)}`;

                    //Dynamic Price Calculator
                    let priceCalculator = (...prices) => {
                        let totalPrice = 0;
                        prices.forEach((price) => {
                            totalPrice += price;
                        });
                        return totalPrice;
                    }
                    document.querySelector('.total_price').innerHTML = `Total Price = ${priceCalculator(80,70,40,20)}`;

                    //Remove Properties (Object Rest)
                    let employee = {
                        id: 101,
                        name: "Amit Sharma",
                        department: "IT",
                        salary: 55000
                    };
                    //Object Destructuring + Rest Operator
                    let {
                        id,
                        name,
                        ...remainingData
                    } = employee;

                    document.querySelector('.rest-remaining').innerHTML = `
                    Name = ${name} <br/>
                    Remaining Data = ${JSON.stringify(remainingData)}`;

                    //Collect Remaining Data (Object Rest)

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
                    let {
                        customer_name,
                        mobile,
                        ...remainingCustomerData
                    } = customer
                    document.querySelector('.collect-remaining').innerHTML = `
                    Customer Name = ${customer_name} <br/>
                    Mobile = ${mobile} <br/>
                    Remaining Customer Data = ${JSON.stringify(remainingCustomerData)}
                    `;

                    //Student Attendance

                    let studentAttendance = (teacher, ...Students) => {
                        let displayList = "";
                        displayList += `Teacher Name = ${teacher} <br/>  <br/>`;
                        Students.forEach((student) => {
                            displayList += `Student Name = ${student} <br/>`;
                        });
                        return displayList;
                    }
                    document.querySelector('.student-attendance').innerHTML = studentAttendance('Neha', 'Jyoti', 'Neha', 'Sumit', 'Akhil', 'Priti');

                    //Online Order System
                    let onlineOrder = (customerName, ...items) => {
                        let displayData = "";
                        displayData += `Customer Name = ${customerName} <br/> <br/>`;
                        items.forEach((item) => {
                            displayData += `Item Name = ${item}<br/>`;
                        });
                        return displayData;
                    }

                    document.querySelector('.online_order').innerHTML = onlineOrder('Akhil', 'Laptop', 'Mobile');

                    //Exam Result System
                    let examResult = (studentName, ...marks) => {
                        let dispalyMessage = "";
                        let totalmarks = 0;
                        let average = 0;
                        marks.forEach((mark) => {
                            totalmarks += mark;
                        });
                        average = totalmarks / marks.length;
                        dispalyMessage = `Student Name = ${studentName} <br/>
                        Total Marks = ${totalmarks} <br/>
                        Average = ${average} `;
                        return dispalyMessage;
                    }
                    document.querySelector('.exam_result').innerHTML = examResult('Priti', 80,70,50,90);
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