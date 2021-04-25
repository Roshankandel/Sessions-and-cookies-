<?php
session_start()
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<body style="text-align: center;">
    <h3>
        Welcome <?php echo $_SESSION['name'] ?>!
    </h3>
    <h4>Click here to <a href="logout.php">Logout</a></h4>
</body>

</html>