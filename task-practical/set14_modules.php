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
                        <h3 class="mb-3">Calculator Module (Named Export)</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="calculator mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">User Module (Default Export)</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="user mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Authentication Module ( Login, Logout, CheckUser)</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="login mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Utility Functions ( Capitalize, Currency Format, Date Format )</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="utility-functions mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3">Product Module</h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="product_list mb-3 mt-3 card shadow-sm p-3"></div>

                    </div>
                </div>

                <!-- script -->

                <script></script>

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
    <script type="module" src="js/main.js"></script>
</body>

</html>
