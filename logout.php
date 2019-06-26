<?php
session_start();
if(isset($_SESSION['user_id'])) {
    unset($_SESSION['user_id']);
} if(isset($_SESSION['username'])) {
    unset($_SESSION['username']);
} if(isset($_SESSION['succes'])) {
    unset($_SESSION['succes']);
}

    session_destroy();
    header('Location: home.php');


