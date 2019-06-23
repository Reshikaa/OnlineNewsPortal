 <?php
 session_start();

 if($_SESSION['email']==true)
 {

 }
 else
 {
  header('location:admin_login.php');
}

$page='category';

    include('include/header.php');

  ?>

  <?php
  include('db/connection.php');

  $id=$_GET['edit'];

  $query = mysqli_query($conn,"select * from category where id='$id'");

  while($row=mysqli_fetch_array($query))
  {
    $category=$row['category_name'];
    $des=$row['des'];
  }
  ?>

<div style="width:70%; margin-left: 15%; margin-top: 10%" >

	  <form action="edit.php" method="post" name="categoryform" onsubmit="return validateform()">
	  	<h1> Update Category</h1>
	  	<hr>

  <div class="form-group">
    <label for="email">Category:</label>
    <input type="text" name="category" value="<?php echo $category ; ?>" class="form-control" id="email">
  </div>

<div class="form-group">
  <label for="comment">Description:</label>
  <textarea class="form-control" value="<?php echo $des ; ?>"  rows="5" id="comment" name="des"> 
    <?php echo $des; ?>
 </textarea>
</div>

 <input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>" >
  <input  type="submit" name="submit" class="btn btn-primary" value="Update">
</form>
	
<script>
  
  function validateform()
  {
    var x= document.forms['categoryform']['category'].values;
    if(x=="")
    {
      alert('Please fill out the Category');
      return false
    }

  }

</script>

</div>

<?php
include ('db/connection.php');
if (isset($_POST['submit']))
  {
     $id=$_POST['id'];
     $category=$_POST['category'];
     $des=$_POST['des'];

     $query1= mysqli_query($conn,"update category set category_name='$category' , des ='$des' where id= '$id' ");

     if($query1)
     {
      echo"<script> alert ('Category Updated') </script>";
      echo "<script> window.location='http://localhost:8080/News/categories.php';</script>";
     }
     else
     {
       echo"<script> alert ('Category not updated') </script>";
     }
  }


?>

<?php
include('include/footer.php');
?>

