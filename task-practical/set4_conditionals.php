<?php include 'header.php'; ?>
<style>
    body {
        background: white;
        color: black;
    }

    .dark-mode {
        background: black;
        color: white;
    }

    .dark-mode .card {
        background-color: black;
        color: white;
    }
</style>

<body>

    <div class="d-flex">

        <!-- Sidebar -->

        <?php include 'sidebar.php'; ?>

        <!-- Main Content -->

        <div class="main-content">

            <!-- Navbar -->

            <nav class="navbar navbar-expand-lg bg-white shadow-sm">

                <div class="container-fluid">

                    <h4 class="fw-bold">Practice Set 4 – Conditionals</h4>

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
                        <h3 class="mb-2 mt-2">1. Voting eligibility</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="voter_eligibility mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-2 mt-2">2. Login validation</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="login_validation mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-2 mt-2">3. Salary bonus</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="salary_bonus mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-2 mt-2">4. Grade Calculator</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="grade_calculator mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-2 mt-2">5. Theme Switch (Dark/Light)</h3>
                        <button class="theme btn btn-warning" onclick="toggleTheme()">Switch Theme</button>
                    </div>
                </div>

                <!-- script -->
                <script>
                    //Practice Set 4 – Conditionals

                    //Voting eligibility
                    let voterAge = 12;
                    let eligible = (voterAge >= 18) ? "You are eligible to vote." : "Sorry, you are not eligible to vote.";
                    document.querySelector('.voter_eligibility').innerText = eligible;

                    //Login Validation
                    let loginUserName = "raju";
                    let userPassword = "123456";

                    let storedUsername = "raju";
                    let storedPassword = "123456";

                    let loginUserStatus = "";
                    if (loginUserName === storedUsername && userPassword === storedPassword) {
                        loginUserStatus = "Login success";
                    } else {
                        loginUserStatus = "Login failed";
                    }

                    document.querySelector('.login_validation').innerText = loginUserStatus;

                    //Salary Bonus
                    let salary = 50000;
                    let joiningYear = 2000;
                    let currentYear = new Date().getFullYear();
                    let bonus = 0;
                    let newSalary = 0;
                    let experience = currentYear - joiningYear;
                    if (experience >= 5) {
                        bonus = (salary * 10) / 100;
                        newSalary = salary + bonus;
                    } else {
                        newSalary = salary;
                    }

                    document.querySelector('.salary_bonus').innerText = newSalary;

                    //Grade Calculator
                    let marks = 80;
                    let grade = "";
                    if (marks < 0 || marks > 100) {
                        grade = "Invalid Marks";
                    } else if (marks >= 90) {
                        grade = "A";
                    } else if (marks >= 75) {
                        grade = "B";
                    } else if (marks >= 50) {
                        grade = "C";
                    } else {
                        grade = "Fail";
                    }
                    document.querySelector('.grade_calculator').innerText = grade;

                    //Theme Switch (Dark/Light)
                    function toggleTheme() {
                        document.body.classList.toggle('dark-mode');
                    }
                </script>

                <!-- Previous & Next Buttons -->
                <div class="button-wrapper">
                    <a href="set3_template-literals.php" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left"></i> Previous
                    </a>

                    <a href="set5_loop.php" class="btn btn-primary">
                        Next <i class="bi bi-arrow-right"></i>
                    </a>
                </div>


            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
