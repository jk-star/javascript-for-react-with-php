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
                        <h3 class="mb-3"></h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="users mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3"></h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="add_user mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3"></h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="update_user mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3"></h3>
                        <b class="text-success text-capitalize">output</b>
                        <div class="delete_user mb-3 mt-3 card shadow-sm p-3"></div>
                    </div>
                </div>

                <!-- script -->

                <script>
                    const usersDiv = document.querySelector(".users");

                    async function getUsers() {

                        try {

                            usersDiv.innerHTML = "Loading Users...";

                            const response = await fetch("https://jsonplaceholder.typicode.com/users");

                            const users = await response.json();

                            usersDiv.innerHTML = "";

                            users.forEach((user) => {

                                usersDiv.innerHTML += `
                                    ID : ${user.id} <br>
                                    Name : ${user.name} <br>
                                    Email : ${user.email} <br><br>
                                `;

                            });

                        } catch (error) {

                            usersDiv.innerHTML = "❌ Something Went Wrong";

                        }

                    }

                    getUsers();

                    const addUserDiv = document.querySelector(".add_user");

                    async function addUser() {

                        let newUser = {
                            name: "Neha Singh",
                            email: "neha@gmail.com",
                            city: "Delhi"
                        };

                        try {

                            addUserDiv.innerHTML = "Adding User...";

                            const response = await fetch("https://jsonplaceholder.typicode.com/users", {

                                method: "POST",

                                headers: {
                                    "Content-Type": "application/json"
                                },

                                body: JSON.stringify(newUser)

                            });

                            const data = await response.json();

                            addUserDiv.innerHTML = `
                                ✅ User Added Successfully <br><br>

                                ID : ${data.id} <br>
                                Name : ${data.name} <br>
                                Email : ${data.email} <br>
                                City : ${data.city}
                            `;

                        } catch (error) {

                            addUserDiv.innerHTML = "❌ Failed To Add User";

                        }

                    }

                    addUser();

                    const updateUserDiv = document.querySelector(".update_user");

                    async function updateUser() {

                        let userId = 1;

                        let updatedUser = {
                            name: "Neha Singh",
                            email: "neha.new@gmail.com",
                            city: "Mumbai"
                        };

                        try {

                            updateUserDiv.innerHTML = "Updating User...";

                            const response = await fetch(`https://jsonplaceholder.typicode.com/users/${userId}`, {

                                method: "PUT",

                                headers: {
                                    "Content-Type": "application/json"
                                },

                                body: JSON.stringify(updatedUser)

                            });

                            const data = await response.json();

                            updateUserDiv.innerHTML = `
                                ✅ User Updated Successfully <br><br>

                                ID : ${userId} <br>
                                Name : ${data.name} <br>
                                Email : ${data.email} <br>
                                City : ${data.city}
                            `;

                        } catch (error) {

                            updateUserDiv.innerHTML = "❌ Failed To Update User";

                        }

                    }

                    updateUser();

                    const deleteUserDiv = document.querySelector(".delete_user");

                    async function deleteUser() {

                        let userId = 1;

                        try {

                            deleteUserDiv.innerHTML = "Deleting User...";

                            const response = await fetch(`https://jsonplaceholder.typicode.com/users/${userId}`, {

                                method: "DELETE"

                            });

                            if (response.ok) {

                                deleteUserDiv.innerHTML = `
                                    ✅ User Deleted Successfully <br><br>
                                    Deleted User ID : ${userId}
                                `;

                            } else {

                                deleteUserDiv.innerHTML = "❌ Failed To Delete User";

                            }

                        } catch (error) {

                            deleteUserDiv.innerHTML = "❌ Server Error";

                        }

                    }

                    deleteUser();
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