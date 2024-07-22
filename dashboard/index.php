<body>
    <!-- Navbar Started -->
    <?php
    include './admin-navbar.php';
    ?>
    <!-- Navbar Ended -->

    <!-- Main Content Started -->
    <div class="container mt-5 bg-body-tertiary p-3">
        <div class="d-flex justify-content-center rounded-3 mb-4">
            <div class="h3 d-none d-md-block">
                Welcome, <?php echo $_SESSION['name'] ?>, to the Admin Panel
            </div>
            <div class="h5 d-md-none d-sm-block">
                Welcome, <?php echo $_SESSION['name'] ?>, to the Admin Panel
            </div>
        </div>
        <div class="row">
            <!-- Add Event Card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-center">Add User/Admin</h5>
                    </div>
                    <div class="card-body d-flex justify-content-evenly">
                        <!-- <p class="card-text">Add a new user to the system.</p> -->
                        <a href="./add-admin.php" class="btn btn-primary">Add Admin</a>
                        <a href="./list-admin.php" class="btn btn-primary">List Admins</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Ended -->

    <!-- Footer Start -->
    <?php
    include './admin-footer.php';
    ?>
    <!-- Footer End -->
</body>

</html>