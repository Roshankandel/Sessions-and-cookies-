<?php
session_start();
setcookie('name', $name, time() - 1);
setcookie("password", $pass, time() - 1);
session_destroy();
header("location:index.php");
