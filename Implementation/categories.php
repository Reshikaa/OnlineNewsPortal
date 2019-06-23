 <?php
 session_start();

 if($_SESSION['email']==true)
 {

 }
 else
  header('location:admin_login.php');

$page='category';

    include('include/header.php');

  ?>

<div style="width:70%; margin-left:20%; margin-top: 10%" >
    <div class="text-right">
    	<a href="addcategory.php">Add Category</a>
    </div>
    <br>
    <br>
	 
	<table class=" table table-bordered">
		<tr>
			<th>ID</th>
			<th>CATEGORY</th>
			<th>DESCRIPTION</th>
			<th>EDIT</th>
			<th>DELETE</th>
		</tr>
		         <?php
           include('db/connection.php');
           $query=mysqli_query($conn,"select * from category");
           while ($row=mysqli_fetch_array($query))
           {
               ?>
           	<tr>
           		<td><?php echo $row['id'];?></td>
           		<td><?php echo $row['category_name'];?></td>
           		<td><?php echo substr($row['des'],0,200);?></td>
           		<td><a href="edit.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a></td>
           		<td><a href="delete.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
           		
           	</tr>

           	<?php
           }
		    ?>

    </table>
     

</div>

<?php
include('include/footer.php');
?>