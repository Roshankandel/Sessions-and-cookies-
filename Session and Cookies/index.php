<?php
$name = "";
$password = "";
if (isset($_COOKIE['name']) && isset($_COOKIE['password'])) {
    $name = $_COOKIE['name'];
    $password = $_COOKIE['password'];
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        .login {
            align-items: center;
            text-align: center;
            margin-top: 40px;
        }
    </style>
</head>

<body>
    <div class="login">
        <h1>Login Here</h1>
        <form action="validate.php" method="post">
            <label for="username"><b>Username:</b></label>
            <input type="text" name="username" id="name" placeholder="Your Username:" value="<?php echo $name ?>">
            <br><br>
            <label for="password"><b>Password:</b></label>
            <input type="password" name="password" id="password " placeholder=" Your password" value="<?php echo $password ?>"><br><br>
            <input type="checkbox" name="remember_me" id="">
            <label for="remember_me"><b> Remember Me </b></label>
            <br><br>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>