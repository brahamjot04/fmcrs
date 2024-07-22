<!-- Navbar Start -->
<?php
include './admin-navbar.php';
?>
<!-- Navbar Ended -->

<!-- Deleting user start -->
<?php
if (isset($_GET['delete'])) {
    $sno = $_GET['delete'];

    $sql = "DELETE FROM users WHERE sno = $sno";
    if ($conn->query($sql) === TRUE) {
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
                                echo "<td>" . $row['username'] . "</td>";
                                // echo "<td> <button class='btn btn-primary btn-sm'>Change Password</button> </td>";
                        ?>
                                <td>
                                    <a href="<?php $_SESSION['delete_sno'] = $row['sno'] ?>" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#DeleteUserModal">Delete User</a>
                                    <!-- <a href="list-admin.php?delete=<?php echo $row['sno']; ?>" class="btn btn-danger btn-sm">Delete User</a> -->
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
<div class="modal fade" id="DeleteUserModal" tabindex="-1" aria-labelledby="DeleteUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="DeleteUserModalLabel">Delete User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this user?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <a href="list-admin.php?delete=<?php echo $_SESSION['delete_sno'];
                                                unset($_SESSION['delete_sno']); ?>" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>
<!-- Footer Start -->
<?php
include './admin-footer.php';
?>
<!-- Footer End -->