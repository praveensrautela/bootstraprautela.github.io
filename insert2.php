<?php
include "coon.php";

if(isset($_POST['done'])){
   $name= $_POST['username'];
   $pass= $_POST['password'];
   $insert = "INSERT INTO crudtbl (name , password)VALUES('$name','$pass')";
   $query= mysqli_query($conn,$insert);
   header('location:display2.php');
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="col-lg-6 m-auto">
<form method="post">
<div class="card">
<div class="crad-header bg-dark">
<h1 class="text-white">INSERT YOUR DATA HERE</h1>
</div>

<label>Username:</label>
<input type="text" name="username" class="form-control" autocomplete="off">
<label>Password:</label>
<input type="text" name="password" class="form-control" autocomplete="off">
<button class="btn btn-success" name="done" type="submit">Insert</button>
</form>
</div>
</form>
    </div>
</body>
</html>
