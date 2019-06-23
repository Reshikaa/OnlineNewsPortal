<?php
include 'db/connection.php';
$id=$_GET['delete'];
$query=mysqli_query($conn,"delete from category where id='$id'");

if($query)
{
    echo" <script> alert ('Category deleted') </script>";
}

else
{
	echo"<script> alert ('try again') </script>";
}

header('location:categories.php')
  ?>

