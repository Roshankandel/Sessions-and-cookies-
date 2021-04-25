<?php

$username = "Roshan kandel";
$password = "1234@abc";
if (isset($_POST['submit'])) {

    $name = $_POST['username'];
    $pass = $_POST['password'];
    if ($username == $name && $password == $pass) {
        session_start();
        $_SESSION['name'] = $name;
        $_SESSION['password'] = $pass;
        header("location:Welcome.php");
        if (isset($_POST['remember_me'])) {
            setcookie('name', $name, time() + (60 * 60 * 7));
            setcookie('password', $pass, time() + (60 * 60 * 7));
        }
    } else {
        echo "Invalid Credentials! Click here to <a href='index.php'>try again </a>";
    }
} else {

    header("location:index.php");
}
