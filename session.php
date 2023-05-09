





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    if(isset($_POST['submit'])){
       $email = $_POST['email'];
       $password = $_POST['password'];
       if ($email=="nguyenquangsang@gmail.com" && $password=="123456") {
       }
    }

    ?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
<label for="email">Email:</label>
<input type="text" id="email" name="email"> <br>
<label for="password" >Password:</label>
<input type="password" id="password" name="password">
<input type="submit" value="submit" name="submit" >
</form>
</body>
</html>
