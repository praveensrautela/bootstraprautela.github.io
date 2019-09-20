<?php
include "coon.php";
$id = $_GET['id'];
$delete= "DELETE  FROM crudtbl WHERE id='$id'";
$query = mysqli_query($conn,$delete);
header('location:display2.php');




?>