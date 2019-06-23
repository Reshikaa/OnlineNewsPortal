<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>ADMIN DASHBOARD</title>

      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- Popper JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

      <!-----  Custom css  ------>
      <link rel="stylesheet" href="style/admin.css">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="style/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"> <?php echo $_SESSION['email'] ?> </a>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="logout.php">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link <?php if($page=='home') {echo 'active';} ?>" href="home.php">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <br>
          <hr>
          <br>
          <li class="nav-item">
            <a class="nav-link <?php if($page=='news') {echo 'active';} ?>" href="news.php">
              <span data-feather="file"></span>
              News
            </a>
          </li>
          <br>
          <hr>
          <br>
          <li class="nav-item">
            <a class="nav-link"  <?php if($page=='category') {echo 'active';} ?>" href="addblog.php>
              <span data-feather="shopping-cart"></span>
              Blogs
            </a>
          </li>
          <br>
          <hr>
          <br>
          <li class="nav-item">
            <a class="nav-link <?php if($page=='category') {echo 'active';} ?>" href="categories.php">
              <span data-feather="users"></span>
              Categories
            </a>
          </li>
          <br>
          <hr>
          <br>
          <li class="nav-item">
            <a class="nav-link" <?php if($page=='category') {echo 'active';} ?>" href="index.php">
              <span data-feather="bar-chart-2"></span>
              Home
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>
