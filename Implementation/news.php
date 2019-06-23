 <?php
 session_start();

 if($_SESSION['email']==true)
 {

 }
 else
  header('location:admin_login.php');

$page='news';

    include('include/header.php');

  ?>

    <div style="margin-left: 15%">
    <ul class="breadcrumb">
      <li class="breadcrumb-item active"><a href="home.php">Home</a></li>
      
      <li class="breadcrumb-item active">News</li>
    </ul>
  </div>

<div style="width:70%; margin-left:20%; margin-top: 5%" >
    <div class="text-right">
      <a href="addnews.php">Add News</a>
    </div>
    <br>
    <br>
   
  <table class=" table table-bordered">
    <tr>
      <th>ID</th>
      <th>TITLE</th>
      <th>DESCRIPTION</th>
      <th>DATE</th>
      <th>CATEGORY</th>
      <th>THUMBNAIL</th>
    </tr>
             <?php
           include('db/connection.php');

           $query=mysqli_query($conn,"select * from news ");
           while ($row=mysqli_fetch_array($query))
          {
             ?>

             <tr>
               <td><?php echo $row['id']?></td>
               <td><?php echo $row['title']?></td>
               <td><?php echo $row['description']?></td>
               <td><?php echo date("F jS,y", strtotime($row['date']));?></td>
               <td><?php echo $row['category']?></td>
               <td><img class="img img-thumbnail" src="image/<?php echo $row['thumbnail']?>" alt="" width="100" height="100"></td>

             </tr>
           <?php }?>

  </table>
     

</div>

<?php
include('include/footer.php');
?>