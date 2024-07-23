<?php
include_once "../common/conn.php";

session_start();
if (!isset($_SESSION['username']) || $_SESSION['loggedin'] !== true || !isset($_SESSION['id']) || !isset($_SESSION['role'])) {
    header('Location: ../');
    exit();
}
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

<div class="navbar bg-body-tertiary">
    <div class="container-fluid d-flex justify-content-between">
        <div class="navbar-brand">
            <div class="d-flex align-items-center">
                <img src="../assets/img/fmcrs.png" alt="" class="d-none d-md-block" width="45" />
                <img src="../assets/img/fmcrs.png" alt="" class="d-md-none d-sm-block" width="40" />
                <span class="h4 ms-3 pt-2 d-none d-md-block">90.8 MHz FMCRS</span>
                <span class="h5 ms-3 pt-2 d-sm-block d-md-none">90.8 MHz FMCRS</span>
            </div>
        </div>
        <span class="d-inline-flex align-items-center">
            <span class="me-3">Welcome, <?php echo $_SESSION['username']; ?></span>
            <a href="../logout/" class="btn btn-primary d-none d-md-inline-block">Logout</a>
            <a href="../logout/" class="btn btn-primary d-sm-block d-md-none btn-sm">Logout</a>
        </span>
    </div>
</div>