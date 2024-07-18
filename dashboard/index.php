<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['loggedin'] !== true || !isset($_SESSION['id'])) {
    header('Location: ../');
    exit();
}
echo $_SESSION['username'];
echo "<br>";
echo $_SESSION['id'];
echo "<br>";
echo $_SESSION['loggedin'];
echo "<br>";
echo "Admin Dashboard";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - 90.8 MHz FMCRS</title>
    <!-- Bootstrap CSS CDN Start-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap CSS CDN End-->
</head>

<body>
    <a href="../logout/" class="btn btn-primary">Logout</a>
</body>

</html>