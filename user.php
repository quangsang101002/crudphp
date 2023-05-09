
<?php
include './connect.php';
if(isset($_POST["submit"])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "insert into `crud` (name, email, mobile, password)
     values 
    ('$name', '$email','$mobile', '$password')";

    $result = mysqli_query($con, $sql);

    if($result){
      header('location:display.php');
    }else{
      die (mysqli_error($con));
    }
     
};

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
         <h2>Form CRUD</h2>
    <div class="container my-5">
    <form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="enterName...">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email:</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name="email" placeholder="enterEmail...">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mobile:</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="mobile" placeholder="enterMobile...">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password:</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="password" placeholder="passWord...">
  </div>
 
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>


    </div>
  </body>
</html>