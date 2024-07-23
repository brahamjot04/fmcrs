<?php
include './admin-navbar.php';

// Submitting Event creation form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $eventTitle = $_POST['eventTitle'];
    $eventDescription = $_POST['eventDescription'];
    $eventDate = $_POST['eventDate'];
    $eventTime = $_POST['eventTime'];
    $eventVenue = $_POST['eventVenue'];
    $eventImage = $_FILES['eventImage'];

    // File upload path
    $targetDir = "../assets/img/events/";
    $fileName = basename($eventImage["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Check if image file is a actual image or fake image
    $check = getimagesize($eventImage["tmp_name"]);
    if ($check !== false) {
        // Check file size
        if ($eventImage["size"] > 1000000) {
            $_SESSION['error'] = "Sorry, your file is too large.";
            header("Location: ./add-event.php");
            exit;
        }
        // Allow certain file formats
        $allowedFileTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (!in_array($fileType, $allowedFileTypes)) {
            $_SESSION['error'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            header("Location: ./add-event.php");
            exit;
        }
        // Check if $uploadOk is set to 0 by an error
        if (move_uploaded_file($eventImage["tmp_name"], $targetFilePath)) {
            // Insert event data into database
            $sql = "INSERT INTO events (event_title, event_description, event_date, event_image, event_time, event_venue) VALUES ('$eventTitle', '$eventDescription', '$eventDate', '$fileName', '$eventTime', '$eventVenue')";
            if ($conn->query($sql) === TRUE) {
                $_SESSION['success'] = "Event added successfully";
                header("Location: ./list-event.php");
                exit;
            } else {
                $_SESSION['error'] = "Error: " . $sql . "<br>" . $conn->error;
                header("Location: ./add-event.php");
                exit;
            }
        } else {
            $_SESSION['error'] = "Sorry, there was an error uploading your file.";
            header("Location: ./add-event.php");
            exit;
        }
    } else {
        $_SESSION['error'] = "File is not an image.";
        header("Location: ./add-event.php");
        exit;
    }
}
?>
<!-- Main Content Start -->
<div class="container mt-5">
    <?php
    if (isset($_SESSION['error'])) {
        echo "<div class='h4 text-danger'>" . $_SESSION['error'] . "</div>";
        unset($_SESSION['error']);
    }
    if (isset($_SESSION['success'])) {
        echo "<div class='h4 text-success'>" . $_SESSION['success'] . "</div>";
        unset($_SESSION['success']);
    }
    ?>
    <div class="row mb-5">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="text-center">Add Event</h3>
                </div>
                <div class="card-body">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="eventTitle" class="form-label">Event Title</label>
                            <input type="text" class="form-control" id="eventTitle" name="eventTitle" required>
                        </div>
                        <div class="mb-3">
                            <label for="eventDescription" class="form-label">Event Description</label>
                            <textarea class="form-control" id="eventDescription" name="eventDescription" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="eventDate" class="form-label">Event Date</label>
                            <input type="date" class="form-control" id="eventDate" name="eventDate" required>
                        </div>
                        <div class="mb-3">
                            <label for="eventTime" class="form-label">Event Time</label>
                            <input type="time" class="form-control" id="eventTime" name="eventTime">
                        </div>
                        <div class="mb-3">
                            <label for="eventVenue" class="form-label">Event Venue</label>
                            <input type="text" class="form-control" id="eventVenue" name="eventVenue" required>
                        </div>
                        <div class="mb-3">
                            <label for="eventImage" class="form-label">Event Image</label>
                            <input type="file" class="form-control" id="eventImage" name="eventImage" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Event</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include './admin-footer.php';
?>