<?php

session_start();
// session_destroy();
unset($_SESSION['loggedin']);
unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['name']);
unset($_SESSION['role']);
if (session_destroy()) {
    echo "Logged Out Successfully";
    header("Location: ../index/");
}
exit;
