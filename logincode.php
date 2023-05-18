<?php
    global $msg;
    global $consent;
    if(!isset($_SESSION)){
        $msg = "";
        $consent = false;
        session_start();
    }

    if (!isset($_SESSION['loggedin']) && !$_SESSION['loggedin']) {
        $msg = "You are currently not logged in. Please log in in order to access our other pages.";
    }
    else{
        $msg = "Hello ".$_COOKIE['username']."!";
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username == 'test' && $password == 'Parola123') {
            $_SESSION['loggedin'] = true;
            if (isset($_POST['remember'])) {
                setcookie('username', $username, time() + (14 * 24 * 60 * 60));
            }
            header('location: home.php');
            exit;
        } else {
            // Display an error message
            $error = 'Invalid login credentials';
        }
    }
?>
