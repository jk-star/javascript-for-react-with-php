<?php include '../header.php'; ?>
<link rel="stylesheet" href="../css/mini-project-dashboard.css">

<body>

    <div class="d-flex">

        <!-- Sidebar -->

        <?php include '../sidebar.php'; ?>

        <!-- Main Content -->

        <div class="main-content">

            <!-- Navbar -->

            <nav class="navbar navbar-expand-lg bg-white shadow-sm">

                <div class="container-fluid">

                    <h4 class="fw-bold">Calculator</h4>

                    <div class="ms-auto">

                        <button class="btn btn-primary">
                            <i class="bi bi-bell"></i>
                        </button>

                    </div>

                </div>

            </nav>

            <div class="container-fluid mt-4">

                <!-- Cards -->
                <?php include 'calculator-design.php' ?>

            </div>

        </div>

    </div>

    <?php include "../footer.php"; ?>