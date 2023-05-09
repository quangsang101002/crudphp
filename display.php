<?php
 include './connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5" >
    <button type="submit" class="btn btn-primary" name="submit" ><a href="/user.php"  class="text-light" class="text-white" class="text-decoration-none">Submit</a></button>

    <table class="table table-striped table-hover">
    <thead>
    <tr>
    <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php 

$sql = "Select * from `crud`";

$result = mysqli_query($con, $sql);


if($result){
    while($row = mysqli_fetch_assoc($result)){
        $id = $row["id"];
        $name = $row["name"];
        $email = $row["email"];
        $password = $row["password"];

        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$password.'</td>
        <td>
        <button class="btn btn-primary border-0"><a href="update.php?updateid='.$id.'" class= "text-light" >Upload</a></button>

        <button class="btn btn-danger border-0"><a href="delete.php?deleteid='.$id.'" class= "text-light" > Delete</a></button>
        </td>
      </tr>';
    }
}

    ?>
  </tbody>
</table>
    </div>
</body>
</html>

