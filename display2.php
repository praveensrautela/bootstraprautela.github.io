



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
    <div class="container">
    <div class="col-lg-12">
    <h1 class="text-white text-center bg-success">Display Data</h1>
    <table class="table table-striped table-hover table-bordered">
    <tr class="bg-dark text-white text-center">
    <td>Id</td>
    <td>Name</td>
    <td>Password</td>
    <td>Update</td>
    <td>Delete</td>
    
    
    </tr>
    <?php
include "coon.php";

$qa = "SELECT * FROM crudtbl";
$fetch = mysqli_query($conn,$qa);
 while( $result= mysqli_fetch_array($fetch)){
    ?>
    <tr class="bg-white text-dark text-center">
    <td><?php echo $result['id']  ?></td>

    <td><?php echo $result['name']  ?></td>
    <td><?php echo $result['password']  ?></td>
    <td><button class="btn btn-success text-white text-center">
    <a href="update2.php?id=<?php echo $result['id']?>" class="text-white text-center">Update</a>
    </button></td>
    <td><button class="btn btn-danger text-white text-center">
    <a href="delete2.php?id=<?php echo $result['id']?>" class="text-white text-center">Delete</a>
    </button></td>
    
    </tr>
    <?php



}

?>
    </table>
    <button class="text-white text-center bg-success">
    <a href="insert2.php" class="text-center text-white bg-success">Insert New Data</a>
    </button>
    </div>
    </div>
 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
