<?php
include './admin-navbar.php';


// Deleting event
if (isset($_GET['delete'])) {
    $sno = $_GET['delete'];

    $sql = "DELETE FROM events WHERE sno = $sno";

    if ($conn->query($sql)) {
        $_SESSION['success'] = "Event Deleted Successfully";
        header('location: ./list-event.php');
        exit;
    } else {
        $_SESSION['error'] = "Error: " . $sql . "<br>" . $conn->error;
        header('location: ./list-event.php');
        exit;
    }
}
?>
<!-- Main Content Started -->
<div class="container-fluid d-flex justify-content-center mt-3 py-3">
    <div class="col-12 rounded-2">
        <?php
        // Display error if user already exists
        if (isset($_SESSION['error'])) {
            echo "<div class='h4 text-danger'>" . $_SESSION['error'] . "</div>";
            unset($_SESSION['error']);
        }
        if (isset($_SESSION['success'])) {
            echo "<div class='h4 text-success'>" . $_SESSION['success'] . "</div>";
            unset($_SESSION['success']);
        }
        ?>
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="text-center">List of Events</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">S. No.</th>
                            <th scope="col">Event Title</th>
                            <th scope="col">Event Description</th>
                            <th scope="col">Event Date</th>
                            <th scope="col">Event Time</th>
                            <th scope="col">Event Venue</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM events";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row['sno'] . "</td>";
                                echo "<td>" . $row['event_title'] . "</td>";
                                echo "<td>" . $row['event_description'] . "</td>";
                                echo "<td>" . $row['event_date'] . "</td>";
                                echo "<td>" . $row['event_time'] . "</td>";
                                echo "<td>" . $row['event_venue'] . "</td>"; ?>
                                <td>
                                    <a href="./edit-event.php?id=<?php echo $row['sno']; ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <a onClick="javascript:return confirm('Are you sure you want to delete the event?')" href="./list-event.php?delete=<?php echo $row['sno'] ?>" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                        <?php
                                echo "</tr>";
                            }
                        } else {
                            echo <<<HTML
                            <tr><td colspan='7' class='text-center'>No Events found! Add <a href='./add-event.php' class='text-decoration-none'>new events</a></td></tr>
                            HTML;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Main Content End -->
<?php
include './admin-footer.php';
?>