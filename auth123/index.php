<?php
session_start();
include '../common/header.php';
include_once 'conn.php';
// Check if admin is logged in
if (isset($_SESSION['admin'])) {
    // Admin is logged in, show admin panel
    // Add your admin panel code here
    echo "Welcome to the admin panel!";
} else {
    // Admin is not logged in, show login form
    // Add your login form code here
?>
    <section class="vh-100">
        <div class=" container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card rounded-4">
                        <div class="row g-0">
                            <div class="col-md-2 d-none d-md-block">
                                <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" /> -->
                            </div>
                            <div class="col-md-8 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5">

                                    <form method="post">

                                        <div class="d-flex justify-content-center align-items-center mb-3 pb-1">
                                            <img src="../assets/img/fmcrs.png" alt="" style="width: 100px;">
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center mb-3 pb-1">
                                            <span class="h1 fw-bold mb-0 ms-3">90.8 MHz Admin Panel</span>
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form2Example17">Username</label>
                                            <input type="text" class="form-control form-control-lg" name="user" required />
                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form2Example27">Password</label>
                                            <input type="password" name="password" class="form-control form-control-lg" required />
                                        </div>

                                        <div class="pt-1 mb-4 text-center">
                                            <input class="btn btn-primary btn-lg btn-block" type="submit" name="submit" value="Login">
                                        </div>


                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php

}

include '../common/footer.php';
if (isset($_POST['submit'])) {
    $username = $_POST['user'];
    $password = $_POST['password'];

    $username = stripslashes($username);
    $password = stripslashes($password);

    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "SELECT * FROM admin_users WHERE username = '$username' and password = '$hashed_password'";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Error: " . $conn->error);
    }
    // $stmt->bind_param('s', $username);
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        if (password_verify($password, $hashed_password)) {
            $_SESSION['admin'] = $username;
            header("location: admin/");
            exit;
        } else {
            echo "Invalid username or password";
        }
    } else {
        echo "Invalid username or password";
    }

    $stmt->close();
    $conn->close();
}

?>