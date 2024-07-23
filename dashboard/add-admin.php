<?php
include './admin-navbar.php';

// Authorization check for admin
if ($_SESSION['role'] == 0) {
    $_SESSION['error'] = "You are not authorized to view this page";
    header("Location: ./index.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $adminType = $_POST['adminType'];

    $password = password_hash($password, PASSWORD_DEFAULT);

    echo $name . "<br>";
    echo $username . "<br>";
    echo $password . "<br>";
    echo $adminType . "<br>";

    if (empty($name) || empty($username) || empty($password) || $adminType == 'none') {
        $_SESSION['error'] = "Please fill all the fields";
        header("Location: ./add-admin.php");
        exit;
    }
    $query = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        // Check if user already exists
        $_SESSION['error'] = "User already exists";
        header("Location: ./list-admin.php");
        exit;
    } else {
        //Continue with inserting the new admin
        $sql = "INSERT INTO users (Name, username, password, admin_type) VALUES ('$name', '$username', '$password', '$adminType')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Admin added successfully');</script>";
            header("Location: ./list-admin.php");
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}



?>

<div class="container">
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="text-center">Add Admin</h3>
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_SESSION['error'])) {
                        echo "<div class='h4 text-danger'>" . $_SESSION['error'] . "</div>";
                        unset($_SESSION['error']);
                    }
                    ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" autocomplete="off">
                        <div class="mb-3">
                            <label for="name" class="form-label">Enter Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Enter Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Enter Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="adminType" class="form-label">Select Admin Type</label>
                            <select class="form-select" id="adminType" name="adminType" required>
                                <option value="none" selected disabled>Select Admin Type</option>
                                <option value="1">Admin</option>
                                <option value="0">User</option>
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary text-center">Create User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include './admin-footer.php';
?>