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

<div style="width:70%; margin-left: 15%; margin-top: 5%" >

  <div style="margin-left: 15%">
    <ul class="breadcrumb">
      <li class="breadcrumb-item active"><a href="home.php">Home</a></li>
      <li class="breadcrumb-item active"><a href="news.php">News</a></li>
      <li class="breadcrumb-item active">Add News</li>
    </ul>
  </div>

	  <form action="addnews.php" method="post" name="categoryform" enctype="multipart/form-data" onsubmit="return validateform()">
	  	<h1> Add News</h1>
	  	<hr>
  <div class="form-group">
    <label for="email">Title:</label>
    <input type="text" name="title" placeholder="Title..." class="form-control" id="email">
  </div>

<div class="form-group">
  <label for="comment">Description:</label>
  <textarea class="form-control" rows="5" placeholder="description...." id="comment" name="description"></textarea>
</div>

  <div class="form-group">
    <label for="email">Date:</label>
    <input type="date" name="date"  class="form-control" id="email">
  </div>

  <div class="form-group">
    <label for="email">Thumbnail:</label>
    <input type="file" name="thumbnail"  class="form-control img-thumbnail" id="email">
  </div>

    <div class="form-group">
    <label for="email">Category:</label>
    <select name="category">
      <?php
        include('db/connection.php');
        $query=mysqli_query($conn,"select * from category");
        while($row=mysqli_fetch_array($query))
        {
          $category=$row['category_name'];
      ?>
      <option> <?php echo $category ; ?></option>
    <?php }?>
    </select>
  </div>

  <input  type="submit" name="submit" class="btn btn-primary" value="Add">
</form>
	
<script>
  
  function validateform()
  {
    var x= document.forms['categoryform']['title'].values;
    var y= document.forms['categoryform']['description'].values;
    var z= document.forms['categoryform']['date'].values;
    var a= document.forms['categoryform']['category'].values;
    if(x=="")
    {
      alert('Please fill out the Title');
      return false
    }

     if(y=="")
    {
      alert('Please fill out the Description');
      return false
    }

     if(z=="")
    {
      alert('Please fill out the date');
      return false
    }

     if(a=="")
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
  $title=$_POST['title'];
  $description=$_POST['description'];
  $date=$_POST['date'];
  $thumbnail=$_FILES['thumbnail']['name'];
  $tmp_thumbnail=$_FILES['thumbnail']['tmp_name'];
  $category=$_POST['category'];

  move_uploaded_file($tmp_thumbnail,"image/$thumbnail");

  $query1=mysqli_query($conn,"insert into news(title,description,date,category,thumbnail) 
    values ('$title','$description','$date','$category','$thumbnail')");

  if ($query1) 
  {
    echo"<script> alert ('News Updated') </script>";
  }
  else
  {
    echo"<script> alert ('Try again') </script>";
  }
}

?>