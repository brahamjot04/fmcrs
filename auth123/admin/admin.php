<?php
session_start();
require '../conn.php';



if (isset($_SESSION['amin_type'])) {
    $userType = $_SESSION['amin_type'];

    switch ($userType) {
        case 'full_access':
            echo "Welcome to the admin panel!";
            break;
        case 'coordinater':
            echo "Welcome to the coordinater panel!";
            break;

        default:
            echo "You do not have access to this page";
            break;
        
    }
} else {
    header("location: ../index.php");
}