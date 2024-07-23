<body>
    <!-- Navbar Started -->
    <?php
    include './admin-navbar.php';

    // Gallery Image Upload Start
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $imageTitle = $_POST['imageTitle'];
        $imageDescription = $_POST['imageDescription'];
        $imageFile = $_FILES['imageFile'];

        echo $imageTitle . "<br>";
        echo $imageDescription . "<br>";
        echo $imageFile . "<br>";

        if (empty($imageTitle) || empty($imageDescription) || empty($imageFile)) {
            $_SESSION['error'] = "Please fill all the fields";
            header("Location: ./index.php");
            exit;
        }
        // File upload path
        $targetDir = "../assets/img/gallery/";
        $fileName = basename($imageFile["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        // Check if image file is a actual image or fake image
        $check = getimagesize($imageFile["tmp_name"]);
        if ($check !== false) {
            // Check file size
            if ($imageFile["size"] > 500000) {
                $_SESSION['error'] = "Sorry, your file is too large.";
                header("Location: ./index.php");
                exit;
            }
            // Allow certain file formats
            if ($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif") {
                $_SESSION['error'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                header("Location: ./index.php");
                exit;
            }
            // Check if $uploadOk is set to 0 by an error
            if (move_uploaded_file($imageFile["tmp_name"], $targetFilePath)) {
                $query = "SELECT * FROM gallery WHERE image_title = '$imageTitle' LIMIT 1";
                $result = $conn->query($query);
                if ($result->num_rows > 0) {
                    // Check if image already exists
                    $_SESSION['error'] = "Image already exists";
                    header("Location: ./index.php");
                    exit;
                } else {
                    //Continue with inserting the new image
                    $sql = "INSERT INTO gallery (image_title, image_description, image_file) VALUES ('$imageTitle', '$imageDescription', '$imageFile')";

                    if ($conn->query($sql) === TRUE) {
                        $_SESSION['success'] = 'Image added successfully';
                        header("Location: ./index.php");
                        exit;
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                }
                //     // Insert event data into database
                //     $sql = "INSERT INTO events (event_title, event_description, event_date, event_image, event_time, event_location) VALUES ('$eventTitle', '$eventDescription', '$eventDate', '$fileName', '$eventTime', '$eventLocation')";
                //     if ($conn->query($sql) === TRUE) {
                //         $_SESSION['success'] = "Event added successfully";
                //         header("Location: ./list-event.php");
                //         exit;
                //     } else {
                //         $_SESSION['error'] = "Error: " . $sql . "<br>" . $conn->error;
                //         header("Location: ./add-event.php");
                //         exit;
                //     }
                // } else {
                //     $_SESSION['error'] = "Sorry, there was an error uploading your file.";
                //     header("Location: ./add-event.php");
                //     exit;
            }
        } else {
            $_SESSION['error'] = "File is not an image.";
            header("Location: ./index.php");
            exit;
        }
    }

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
        <div class="row mt-4">

            <!-- Add Event Card -->
            <?php if ($_SESSION['role'] == 1) {
            ?>
                <div class="col-md-4">

                    <div class="card">
                        <div class="card-header bg-primary text-light">
                            <h5 class="card-title text-center">Add User/Admin</h5>
                        </div>
                        <div class="card-body d-flex justify-content-evenly">
                            <!-- <p class="card-text">Add a new user to the system.</p> -->
                            <a href="./add-admin.php" class="btn btn-primary">Add Admin</a>
                            <a href="./list-admin.php" class="btn btn-primary">List Admins</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
            <div class="col-md-4">

                <div class="card">
                    <div class="card-header bg-primary-subtle">
                        <h5 class="card-title text-center">Add Event</h5>
                    </div>
                    <div class="card-body d-flex justify-content-evenly">
                        <!-- <p class="card-text">Add a new user to the system.</p> -->
                        <a href="./add-event.php" class="btn btn-primary">Add Event</a>
                        <a href="./list-event.php" class="btn btn-primary">List Events</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">

                <div class="card">
                    <div class="card-header bg-success-subtle">
                        <h5 class="card-title text-center">Manage Gallery</h5>
                    </div>
                    <div class="card-body d-flex justify-content-evenly">
                        <!-- <p class="card-text">Add a new user to the system.</p> -->
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AddImageToGalleryModal">Add Image</button>
                        <!-- <a href="./list-event.php" class="btn btn-primary">List Events</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Ended -->

    <!-- Add Gallery Image Start -->
    <div class="modal fade" id="AddImageToGalleryModal" tabindex="-1" aria-labelledby="AddImageToGalleryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AddImageToGalleryModalLabel">Upload Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <div class="mb-3">
                            <label for="imageTitle" class="form-label">Image Title</label>
                            <input type="text" class="form-control" id="imageTitle" name="imageTitle" required>
                        </div>
                        <div class="mb-3">
                            <label for="imageDescription" class="form-label">Image Description</label>
                            <textarea class="form-control" id="imageDescription" name="imageDescription" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="imageFile" class="form-label">Image File</label>
                            <input type="file" class="form-control" id="imageFile" name="imageFile" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Upload Image</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Gallery Image End -->

    <!-- Footer Start -->
    <?php
    include './admin-footer.php';
    ?>
    <!-- Footer End -->
</body>

</html>