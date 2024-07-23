<!-- Navbar Start -->
<?php
include './admin-navbar.php';
?>
<!-- Navbar Ended -->
<?php
if ($_SESSION['role'] == 0) {
    $_SESSION['error'] = "You are not authorized to view this page";
    header("Location: ./index.php");
    exit;
}
?>
<!-- Deleting user start -->
<?php
if (isset($_GET['delete'])) {
    $sno = $_GET['delete'];

    $sql = "DELETE FROM users WHERE sno = $sno";
    $sql2 = "SELECT * FROM users";
    $result = $conn->query($sql2);
    $row = $result->fetch_assoc();
    $totalRows = $result->num_rows;

    // Verifying if only 1 admin exists
    if ($totalRows == 1) {
        $_SESSION['error'] = "Cannot delete the only admin";
        header('location: list-admin.php');
        exit();
    } else if ($conn->query($sql) === TRUE) {
        $_SESSION['error'] = "Admin Deleted Successfully";
        header('location: list-admin.php');
    } else {
        $_SESSION['error'] = "Error: " . $sql . "<br>" . $conn->error;
        header('location: list-admin.php');
    }
}
?>
<!-- Deleting user end -->

<!-- Main Content Started -->
<div class="container d-flex justify-content-center mt-3 border rounded-3 py-3">
    <div class="col-12 rounded-2">
        <?php
        // Display error if user already exists
        if (isset($_SESSION['error'])) {
            echo "<div class='h4 text-danger'>" . $_SESSION['error'] . "</div>";
            unset($_SESSION['error']);
        }
        ?>
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="text-center">List of Admins</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Admin Type</th>
                            <th scope="col">Action</th>
                            <!-- <th scope="col"></th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM users";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row['sno'] . "</td>";
                                echo "<td>" . $row['Name'] . "</td>";
                                echo "<td>" . $row['username'] . "</td>"; ?>
                                <td><?php if ($row['admin_type'] == 1) {
                                        echo 'Admin';
                                    } else {
                                        echo 'User';
                                    } ?></td>
                                <td>
                                    <?php
                                    if ($row['username'] != $_SESSION['username']) {

                                    ?>
                                        <a onClick="javascript:return confirm('Are you sure you want to delete the user?')" href="./list-admin.php?delete=<?php echo $row['sno'] ?>" class="btn btn-danger btn-sm">Delete User</a>
                                    <?php
                                    } else {
                                    ?>
                                        <button class='btn btn-danger btn-sm' data-bs-toggle="modal" data-bs-target="#UnableToDeleteCurrentUserModal">Delete User</button>
                                    <?php
                                    }
                                    ?>
                                </td>
                        <?php
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='3'>No Admins found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Main Content Ended -->
<!-- Delete User Modal -->
<div class="modal fade" id="UnableToDeleteCurrentUserModal" tabindex="-1" aria-labelledby="UnableToDeleteCurrentUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="UnableToDeleteCurrentUserModalLabel">Unable to delete user</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <p class="text-danger">You can not delete active user!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Footer Start -->
<?php
include './admin-footer.php';
?>
<!-- Footer End -->