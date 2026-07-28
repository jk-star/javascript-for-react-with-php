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

                        <h3 class="mb-3"></h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3"></h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3"></h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="mb-3 mt-3 card shadow-sm p-3"></div>
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

                    const {  name, age, city, email, isActive } = users;
                    document.querySelector('.user_destructuring').innerHTML = `
                        Name = ${name} <br/>
                        Age = ${age} <br/>
                        City = ${city} <br/>
                        Email = ${email} <br/>
                        Active = ${isActive} <br/>
                    `;
                    //Ab baar-baar user.name likhne ki zarurat nahi.

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