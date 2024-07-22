<?php
session_start();

// Check if user is already logged in
if (isset($_SESSION['id']) && $_SESSION['loggedin'] === true && isset($_SESSION['username'])) {
    header("Location: ../dashboard/");
    exit;
}

// Include config file
include '../common/conn.php';

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if username is empty
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter your username.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string(
        $conn,
        $password
    );

    // Validate credentials
    if (empty($username_err) && empty($password_err)) {

        // Prepare a select statement
        $pass_verify_sql = "SELECT * FROM users WHERE username = '$username'";
        $res = $conn->query($pass_verify_sql);

        $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
        $verify_password = password_verify($password, $row['password']);

        if ($verify_password) {
            // Password is correct, so start a new session
            session_start();

            // Store data in session variables
            $_SESSION["loggedin"] = true;
            $_SESSION["id"] = $row['sno'];
            $_SESSION["username"] = $username;
            $_SESSION['name'] = $row['Name'];

            // Redirect User to Dashboard
            header("Location: ../dashboard/");
            exit;
        } else {
            // Display an error message if password is not valid
            $password_err = "The password you entered was not valid.";
        }
    }
    // Close connection
    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - 90.8 MHz FMCRS</title>

    <!-- Bootstrap CSS CDN Start-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap CSS CDN End-->

    <!-- Bootstrap Icon CDN Start -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Bootstrap Icon CDN End -->
</head>

<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3 class="text-center">90.8 MHz FMCRS Admin Login</h3>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                                <span class="text-danger"><?php echo $username_err; ?></span>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                                <span class="text-danger"><?php echo $password_err; ?></span>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS CDN Start -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Bootstrap JS CDN End -->
</body>

</html>