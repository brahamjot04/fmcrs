<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>90.8 Mhz FM Community Radio GNDEC</title>

    <!-- Bootstrap CSS CDN Start-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap CSS CDN End-->

    <!-- Bootstrap Icon CDN Start -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Bootstrap Icon CDN End -->
    <style>
        body {
            background-image: url(../assets/img/recording_system.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            /* height: 100vh; */
        }
    </style>
<title>Registration Form</title>

</head>
<body class="h-100">
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 border rounded-4 p-4 bg-light">
            <h2 class="text-center">Registration Form</h2>
            <form method="POST" action="process_registration.php">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>
                <div class="form-group">
                    <label for="crn">CRN:</label>
                    <input type="text" class="form-control" name="crn" id="crn" required>
                </div>
                <div class="form-group">
                    <label for="urn">URN:</label>
                    <input type="text" class="form-control" name="urn" id="urn" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="contact">Contact Number:</label>
                    <input type="text" class="form-control" name="contact" id="contact" required>
                </div>
                <div class="form-group">
                    <label for="team">Team:</label>
                    <select class="form-control" name="team" id="team" required>
                        <option value="" disabled selected readonly>Select Team</option>
                        <option value="team1">Radio Jockey</option>
                        <option value="team2">Technical Team</option>
                        <option value="team3">Team 3</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
