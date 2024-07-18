<?php

session_start();
// session_destroy();
if (session_destroy()) {
    echo "Logged Out Successfully";
    header("Location: ../index/");
}
exit;
