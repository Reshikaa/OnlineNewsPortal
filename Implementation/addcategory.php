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

<div style="width:70%; margin-left: 15%; margin-top: 10%" >

	  <form action="addcategory.php" method="post" name="categoryform" onsubmit="return validateform()">
	  	<h1> Add Category</h1>
	  	<hr>
  <div class="form-group">
    <label for="email">Category:</label>
    <input type="text" name="category" placeholder="Enter Category name" class="form-control" id="email">
  </div>
<div class="form-group">
  <label for="comment">Description:</label>
  <textarea class="form-control" rows="5" placeholder="Enter Category description" id="comment" name="des"></textarea>
</div>
  <input  type="submit" name="submit" class="btn btn-primary" value="Add">
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
include('include/footer.php');
?>

<?php
include('db/connection.php');

if (isset($_POST['submit'])) 
{
  $category_name=$_POST['category'];
  $des=$_POST['des'];

  $check=mysqli_query($conn,"select * from category where category_name='$category_name'");
  
  if (mysqli_num_rows($check)>0)
  {
    echo"<script> alert ('Category name is already taken!!!!') </script>";

    exit();
  }


  $query=mysqli_query($conn,"insert into category(category_name,des) values('$category_name','$des')");

  if ($query) 
  {
    echo"<script> alert('Category added successfully') </script>";
  }
  else
  {
    echo"<script> alert('Please Try Again!!!') </script>";
  }


}
?>